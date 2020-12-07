$(document).ready(function(){
    // alert()
    /*  
        $(".classname")=document.getElementByClassName
    */

    // $('#add').click(function(){
    //     alert()
    // })

    $(document).on('click', '#add', function(){
     var empnumber= $('#txtEmpNumber').val()
     var empname= $('#txtEmpName').val()
     var empbday= $('#txtBirthDate').val()
     var empdatehired= $('#txtDateHired').val()

     $('tbody').append("<tr class='item-model-number'><td class='emp_id'>" + empnumber + "</td> <td class='emp_name'>" + empname + "</td> <td class='bday'> " + empbday + "</td> <td class='date_hired'>" + empdatehired + " <td> <button class='delete'> Delete</button></td> <td> <button class='edit'> Edit </button></td> </tr>") 
     })

// delete button
    $(document).on('click' , '.delete', function(){
        $(this).parent().parent().remove()
    })



// edit button
    $(document).on('click' , '.edit' , function(){

    //    var emp_id = $(this).closest("tr").find(".emp_id").first().text();
    //    var emp_name = $(this).closest("tr").find(".emp_name").first().text();
    //    var birthday = $(this).closest("tr").find(".bday").first().text();
    //    var datehired = $(this).closest("tr").find(".date_hired").first().text();


    // $('tbody').html("<tr><td > <input type='text' value="+ emp_id+" ></td>  <td id='no'> <input type='text' value="+emp_name+" ></td>td> <td><input type='date' value='"+birthday+"' > </td>  <td> <input type='date' value='"+datehired +"' ></td> <button class='delete'> Delete</button></td><td> <button class='edit'> Edit </button></td>  </tr>" )
    $('.edit').html('Update')
    $(this).removeClass('edit')
    $(this).addClass("update")

    var tr=$(this).parent().parent()
     tr.children().eq(0).html("<input type='text'  value='" +  tr.children().eq(0).text() +"'>")
     tr.children().eq(1).html("<input type='text'  value='" +  tr.children().eq(1).text() +"'>")
     tr.children().eq(2).html("<input type='text'  value='" +  tr.children().eq(2).text() +"'>")
     tr.children().eq(2).html("<input type='text'  value='" +  tr.children().eq(3).text() +"'>")
})

// update button
    $(document).on('click' , '.update' , function(){
            $('.update').html( 'Edit')
            $(this).removeClass( 'update')
            $(this).addClass("edit")

    var tr=$(this).parent().parent()
     tr.children().eq(0).html(tr.children().eq(0).children().val())
     tr.children().eq(1).html(tr.children().eq(1).children().val())
     tr.children().eq(2).html(tr.children().eq(2).children().val())
     tr.children().eq(3).html(tr.children().eq(3).children().val())
    })
})