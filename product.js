const url = 'server.php';
window.onload = read();

function read()
{
  let params = 'command=read';
  ajaxPost(url, params).then(resolve =>
  {
    resolve = JSON.parse(resolve);
    let tbody = document.getElementById('tbody');
    tbody.innerHTML = ' ';
    for(let i = 0; i < resolve.length / 5; i++)
    {
      let tr = document.createElement('tr');
      tr.innerHTML = '<th>' + resolve[(i * 5) + 1] + '</th><th>' + resolve[(i * 5) + 4] + '</th><th>' + resolve[(i * 5) + 2] + '</th>';
      tr.onclick = () =>
      {
        let answer = confirm("Вы точно желаете удалить этот товар?");
        if(answer)
        {
          let params = 'command=del&&id='+resolve[(i * 5)];
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
    alert("Ошибка работы сервера");
    console.log(reject);
  });
}

function ajaxPost(url, params)
{
	return new Promise(function(resolve, reject)
	{
		var request = new XMLHttpRequest;
		request.open('POST',url,true);
		request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
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
