function insert()
{
    var category=document.getElementById('category').value;
    var price=document.getElementById('price').value;
    var tbody = document.getElementById('main-table').getElementsByTagName('tbody')[0];    
    // Создаем строку таблицы и добавляем ее
    var row = tbody.insertRow(0);
    var td1=row.insertCell(0);  
    var td2=row.insertCell(1);
    // Наполняем ячейки
    td1.innerHTML = category;
    td2.innerHTML = price;
}