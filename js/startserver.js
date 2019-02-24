

function StartServer()
{
	$.post("../php/webserver.php","",function(data)
	{
		postMessage(data);
	});
}

StartServer();



