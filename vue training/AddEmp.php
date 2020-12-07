<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
   .test{

       margin-top:10px;
   }
    </style>
</head>
<body>

<div id='myVue'>
    <h1>Employee Information</h1>
    <label >Employee No.</label>
    <input type="text" v-model="employee_number"  >
    <label > Employee Name</label>
    <input type="text" v-model="employee_name" >
    <div class="test">
        <label  > Birthday</label> 
        <input type="date"   v-model="birthdate"  style="margin-left:15px">
        <label > Date Hired</label>
        <input type="date"   v-model="Date_hired">
    </div>
    <button id="add" @click="Addbutton()">Save/Add</button>
    <!-- <pre>{{ JSON.stringify(this.items, null, 2) }}</pre> -->
    <div class="tbl">
        <table border="1" style="width:50%">
                <thead>
                <tr> <th v-for="header in headers">{{header}}</th></tr>
                </thead>
                <tbody id="tbody">
                    <tr v-for="item in items">
                    <td >{{item.no}}</td>
                    <td >{{item.name}}</td>
                    <td >{{item.bday}}</td>
                    <td >{{item.hired}}</td>
                    </tr>
                </tbody>
        </table>
    </div>

</div>



    <script src="js/jquery.min.js"></script>
    <script src="js/vue.js"></script>
    <!-- <script src="js/Myscript.js"></script>s -->
    <script>

    new Vue({
        el: '#myVue', 
                data(){
                return{
                    employee_number:'34782',
                    employee_name:'',
                    birthdate:'',
                    Date_hired:'',
                    headers:["Employee No" , "Employee Name" , "Birth Date" , "Date Hired"],
                    items:[],
                    datas:{
                        no:'',
                        name:'',
                        bday:'',
                        hired:''
                    }
                }
                }, 

     
                methods: {
                     Addbutton(){
                    
                        this.datas.no=this.employee_number
                        this.datas.name=this.employee_name
                        this.datas.bday=this.birthdate
                        this.datas.hired=this.Date_hired
                        this.items.push({...this.datas});
                        
                        }

                },       

  
    })
    


    
    </script>
</body>
</html> 