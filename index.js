const url = 'server.php';
var index = null;
window.onload = read();

function read()
{
  let params = 'command=read';
  ajaxPost(url, params).then(resolve =>
  {
    resolve = JSON.parse(resolve);

    let main = document.getElementById('main');
    main.innerHTML = ' ';
    for(let i = 0; i < resolve.length / 5; i++)
    {
      let str = "";
      str += '\''+resolve[(i * 5)]+'\'';
      console.log(str);
      let div = document.createElement("div");
      div.className = 'col-md-4';
      div.innerHTML = "<br><br><h3>" + resolve[(i * 5) + 1] + '</h3><br>';
      let img = document.createElement('img');
      img.src = resolve[(i * 5) + 2];
      img.onload = () =>
      {
        let h3 = document.createElement('h3');
        h3.innerHTML = '<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Купить</button>'
        h3.onclick = () =>
        {
          let label = document.getElementById('bong');
          label.innerHTML = 'Название модели - '+ resolve[(i * 5) + 1] + '<br>Описание: ' + resolve[(i * 5) + 3] + '<br>Цена: ' + resolve[(i * 5) + 4];
          index = resolve[(i * 5)]; // Берем ид элема
        }
        div.appendChild(img);
        div.appendChild(h3);
        main.appendChild(div);
      };
    }
  }).catch(reject =>
  {
    alert("Ошибка работы сервера");
    console.log(reject);
  });
}

function modal_window()
{
  let num = document.getElementById('num').value;
  let option = document.getElementById('option').value;
  if(!isNaN(num) && !isEmpty(num))
  {
    let params = 'command=client&&id='+index+'&&num='+num+'&&option='+option;
    ajaxPost(url, params).then(resolve =>
    {
      alert(resolve);
      return;
    }).catch(reject =>
    {
      alert("Ошибка добавления заказа!");
      console.log(reject);
    });
  }
  else
  {
    alert('Вы не все ввели или не правильно указали номер');
    return;
  }

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
