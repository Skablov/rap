const url = 'server.php';
window.onload = read();


function modal_window()
{
  let name = document.getElementById('name').value;
  let dis = document.getElementById('dis').value;
  let img = document.getElementById('img').value;
  let cost = document.getElementById('cost').value;
  if(!isEmpty(name) && !isEmpty(dis) && !isEmpty(img) && !isEmpty(cost) && !isNaN(cost))
  {
    let params = 'command=add&&name='+name+'&&dis='+dis+'&&img='+img+'&&cost='+cost;
    ajaxPost(url, params).then(resolve =>
    {
      alert(resolve);
      window.location.reload();
    }).catch(reject =>
    {
      alert("Ошибка обновления бд");
      console.log(reject);
    });
  }
  else
  {
    alert("Вы не все ввели!");
    return;
  }
}

function read()
{
  let params = 'command=admin';
  ajaxPost(url, params).then(resolve =>
  {
    resolve = JSON.parse(resolve);
    let tbody = document.getElementById('tbody');
    tbody.innerHTML = ' ';
    for(let i = 0; i < resolve.length / 4; i++)
    {
      let tr = document.createElement('tr');
      tr.innerHTML = '<th>' + resolve[(i * 4) + 1] + '</th><th>' + resolve[(i * 4) + 2] + '</th><th>' + resolve[(i * 4) + 3];
      tr.onclick = () =>
      {
        let answer = confirm("Желаете закрыть этот заказ?");
        if(answer)
        {
          let params = 'command=close&&id='+resolve[(i * 4)];
          ajaxPost(url, params).then(resolve =>
          {
            alert(resolve);
            read();
          }).catch(reject =>
          {
            alert("Ошибка обновления БД");
            console.log(reject);
          });
        }
        else
        {
          return;
        }
      };
      tbody.appendChild(tr);
    }
  }).catch(reject =>
  {
    alert("Ошибка работы");
    alert(reject);
  });
}

function ajaxPost(url, params)
{
	return new Promise(function(resolve, reject)
	{
		var request = new XMLHttpRequest;
		request.open('POST',url,true);
    request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=utf-8');
		request.addEventListener("load", function()
		{
			if(request.status < 400)
			{
				resolve(request.responseText);
			}
			else
			{
				reject(Error("Ошибка получения данных"));
			}
		});
		request.send(params);
	});
}

function isEmpty(str) // проверка на пустоту
{
  if (str.trim() == '')
    return true;
  return false;
}
