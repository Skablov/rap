const url = 'server.php';
window.onload = read();

function read()
{
  let params = 'command=manager';
  ajaxPost(url, params).then(resolve =>
  {
    resolve = JSON.parse(resolve);
    let tbody = document.getElementById('tbody');
    tbody.innerHTML = ' ';
    for(let i = 0; i < resolve.length / 4; i++)
    {
      let tr = document.createElement('tr');
      tr.innerHTML = '<th>'+resolve[(i * 4)]+'</th><th>' + resolve[(i * 4) + 1] + '</th><th>' + resolve[(i * 4) + 2] + '</th><th>' + resolve[(i * 4) + 3]; // заполняем таблицу
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
