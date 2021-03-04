var current1="";
var current2="";
var current3="";
function test1()
{ 
    var temp;
    $.get("first.php",{league: $('select[name=league]').val()
})
 .done(function( data ) {
        temp=localStorage.getItem('first');
        localStorage.setItem('first',JSON.stringify(data));
      get1(temp);
  });
}

function test2()
{ 
    var temp;
    $.get("second.php",{teamg: $('select[name=teamg]').val()
})
 .done(function( data ) {
        temp=localStorage.getItem('second');
        localStorage.setItem('second',JSON.stringify(data));
      get2(temp);
  });
}

function test3()
{
    var temp;
    $.get("third.php",{teams: $('select[name=teams]').val()
})
 .done(function( data ) {
      temp=localStorage.getItem('third');
      localStorage.setItem('third',JSON.stringify(data));
      get3(temp);
  });
}

function get1(temp)
{
    var strData = localStorage.getItem('first');
    var rows = JSON.parse(strData);
    var result = "";
    var res = document.getElementById("output3");
    result+="<tr>";
    result+="<th>League</th>";
    result+="<th>First Command</th>";
    result+="<th>Second Command</th>";
    result+="<th>Winner</th>";
    result+="</tr>";
     for (var i = 0; i < rows.length; i++)
     {
        result += "<tr>";
        result += "<td>" + rows[i].League + "</td>";
        result += "<td>" + rows[i].Team1 + "</td>";
        result += "<td>" + rows[i].Team2 + "</td>";
        result += "<td>" + rows[i].Winner + "</td>";
        result += "</tr>";
     }
        res.innerHTML = result;

        if(temp===null)
        {  
            localStorage.setItem('first',null);
        }
        else if(temp!==null)
        {
            localStorage.setItem('first',current1);
        }
        current1=strData;
}

function get2(temp)
{
    var strData = localStorage.getItem('second');
    var rows = JSON.parse(strData);
    var result = "";
    var res = document.getElementById("output3");
    result+="<tr>";
    result+="<th>Team</th>";
    result+="<th>Player</th>";
    result+="</tr>";

     for (var i = 0; i < rows.length; i++)
     {
        for(var j=0;j<rows[i].Players.length;j++)
        {
            console.log(j);
            result += "<tr>";
            result += "<td>" + rows[i].Team + "</td>";
            result += "<td>" + rows[i].Players[j] + "</td>";
            result += "</tr>";
        }
     }
        res.innerHTML = result;

        if(temp===null)
        {  
            localStorage.setItem('second',null);
        }
        else if(temp!==null)
        {
            localStorage.setItem('second',current2);
        }
        current2=strData;
}


function get3(temp)
{
    var strData = localStorage.getItem('third');
    var rows = JSON.parse(strData);
    var result = "";
    var res = document.getElementById("output3");
    result+="<tr>";
    result+="<th>League</th>";
    result+="<th>First Command</th>";
    result+="<th>Second Command</th>";
    result+="<th>Winner</th>";
    result+="</tr>";
     for (var i = 0; i < rows.length; i++)
     {
        result += "<tr>";
        result += "<td>" + rows[i].League + "</td>";
        result += "<td>" + rows[i].Team1 + "</td>";
        result += "<td>" + rows[i].Team2 + "</td>";
        result += "<td>" + rows[i].Winner + "</td>";
        result += "</tr>";
     }
        res.innerHTML = result;

        if(temp===null)
        {  
            localStorage.setItem('third',null);
        }
        else if(temp!==null)
        {
            localStorage.setItem('third',current3);
        }
        current3=strData;
}


function warning()
{
    var strData = localStorage.getItem('first');
    var rows = JSON.parse(strData);
    var result = "";
    var res = document.getElementById("localf");
    result+="<label><b>First Requsest</b></label>";
    result+="<table id='output3'>";
    result+="<tr>";
    result+="<th>League</th>";
    result+="<th>First Command</th>";
    result+="<th>Second Command</th>";
    result+="<th>Winner</th>";
    result+="</tr>";
     for (var i = 0; i < rows.length; i++)
     {
        result += "<tr>";
        result += "<td>" + rows[i].League + "</td>";
        result += "<td>" + rows[i].Team1 + "</td>";
        result += "<td>" + rows[i].Team2 + "</td>";
        result += "<td>" + rows[i].Winner + "</td>";
        result += "</tr>";
     }
     result+="</table>";
        res.innerHTML = result;
        result="";
    

    strData = localStorage.getItem('second');
    rows = JSON.parse(strData);
    result = "";
    res = document.getElementById("locals");
    result+="<label><b>Second Requsest</b></label>";
    result+="<table id='output3'>"
    result+="<tr>";
    result+="<th>Team</th>";
    result+="<th>Player</th>";
    result+="</tr>";

     for (var i = 0; i < rows.length; i++)
     {
        for(var j=0;j<rows[i].Players.length;j++)
        {
            console.log(j);
            result += "<tr>";
            result += "<td>" + rows[i].Team + "</td>";
            result += "<td>" + rows[i].Players[j] + "</td>";
            result += "</tr>";
        }
     }
     result+="</table>";
        res.innerHTML = result;
        result="";


    strData = localStorage.getItem('third');
    rows = JSON.parse(strData);
    result = "";
    res = document.getElementById("localt");
    result+="<label><b>Third Requsest</b></label>";
    result+="<table id='output3'>";
    result+="<tr>";
    result+="<th>League</th>";
    result+="<th>First Command</th>";
    result+="<th>Second Command</th>";
    result+="<th>Winner</th>";
    result+="</tr>";
     for (var i = 0; i < rows.length; i++)
     {
        result += "<tr>";
        result += "<td>" + rows[i].League + "</td>";
        result += "<td>" + rows[i].Team1 + "</td>";
        result += "<td>" + rows[i].Team2 + "</td>";
        result += "<td>" + rows[i].Winner + "</td>";
        result += "</tr>";
     }
     result+="<table>";
        res.innerHTML = result;
    
}
