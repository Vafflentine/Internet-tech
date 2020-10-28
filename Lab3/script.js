function getInfo(obj)
{
  var name=document.getElementById("name").value;
  var now = new Date();
  var appoitmentDate=new Date(document.getElementById("date").value);
  var diff = now.getFullYear() - appoitmentDate.getFullYear();
  if (now.getMonth()<appoitmentDate.getMonth()||now.getDate()<appoitmentDate.getDate())
  {
    diff = diff-1;
  } 
  else if(now.getMonth()>appoitmentDate.getMonth()||now.getDate()>appoitmentDate.getDate())
  {
    console.log(diff);
  }
  var diffMonth=appoitmentDate.getMonth()+1;
  var tbody = document.getElementById('table_info').getElementsByTagName('tbody')[0];    
    // Создаем строку таблицы и добавляем ее
    var row = tbody.insertRow(0);
    var td1=row.insertCell(0);  
    var td2=row.insertCell(1);
    var td3=row.insertCell(2); 
    // Наполняем ячейки
    td1.innerHTML = name;
    td2.innerHTML = diffMonth+'/'+appoitmentDate.getDate()+'/'+appoitmentDate.getFullYear();
    td3.innerHTML= diff;
    document.getElementById("name").value=' ';
    document.getElementById("date").value=' ';
}

function getExp(obj)
{
  var totalExp;
  var count1=0;
  var count2=0;
  var count3=0;
  var count4=0;
  var count5=0;
  var terf = document.getElementById('table_info_body');
    var lastChilds = terf.querySelectorAll("td:last-child");
    var list = [];
    for(i=0; i<lastChilds.length; ++i)
    {
        list.push(parseInt(lastChilds[i].innerHTML));
    }   
  for(var value=0;value<list.length;value++)
  {
    (list[value] > 0)&&(list[value]<=5) ? count1++:
    (list[value]>5)&&(list[value] <= 10) ? count2++:
    (list[value]>10)&&(list[value] <= 15) ? count3++ :
    (list[value]>15)&&(list[value]<25) ? count4++:
    (list[value]>=25) ? count5++:
    'Input not correct';
  }
  console.log(count1+'/'+count2+'/'+count3+'/'+count4+'/'+count5);
  totalExp=(count1*2.5+count2*7.5+count3*12.5+count4*20+count5*25)/(count1+count2+count3+count4+count5);
  document.getElementById("out").value=Math.floor(totalExp*10)/10+'лет';
}



function Person(name,age)
{
  this.name=name;
  this.age=age;
}
var person=new Person("Name of person",12);
function Student(course)
{
  this.course=course;
}
Student.prototype = person;
var student = new Student(3);
for( var key in student)
{
  console.log("key "+key+" значение "+student[key]);
}


var title="Hello";
var notify=new Notification(title,{body:"Hello", tag:"div"});


 