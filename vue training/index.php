<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <title>Document</title>
    <style>
    
   .test{

       margin-top:10px;
   }
    </style>
</head>
<body>





<div id='myVue'>
    <v-app>
        <h1>Employee Information</h1>
        <hr color='primary'> 
        <v-card >
            <v-card-title>
                  <h3>Add Employees</h3>  
            </v-card-title>
        <v-card-text>
                <v-row>
                      <v-col cols="6" >
                          <v-text-field outlined dense label="Employee Number" v-model="emp.no"></v-text-field>
                      </v-col>
                    <v-col cols="6" >
                          <v-text-field outlined dense label="Employee Name" v-model="emp.name"></v-text-field>
                    </v-col>  
                    <v-col cols="6"  >
                              <v-menu  v-model="menu"
                                :close-on-content-click="false"
                                :nudge-right="40"
                                transition="scale-transition"
                                offset-y
                                min-width="290px"
                                        >
                              <template v-slot:activator="{ on, attrs }">
                                          <v-text-field
                                            v-model="emp.bday"
                                            label="Enter Birthdate"
                                            append-icon="mdi-calendar"
                                            readonly
                                            v-bind="attrs"
                                            v-on="on"
                                          ></v-text-field>
                              </template> 
                              <v-date-picker v-model="emp.bday" @input="menu=false" ></v-date-picker>
                            </v-menu></v-col>

                   <v-col cols="6">
                          <v-menu v-model="menu2"  :close-on-content-click="false"  :nudge-right="40" transition="scale-transition"
                            offset-y min-width="290px"
                          >
                            <template v-slot:activator="{ on, attrs }">
                                  <v-text-field
                                    v-model="emp.datehired"
                                    label="Enter Date Hired"
                                    append-icon="mdi-calendar"
                                    readonly
                                    v-bind="attrs"
                                    v-on="on"
                                  ></v-text-field>
                             </template>

                            <v-date-picker
                                    v-model="emp.datehired"
                                    @input="menu2=false"
                            ></v-date-picker>
                          </v-menu>
                    </v-col>
                </v-row>   
        </v-card-text>


        <div class="mt-1" align="center">
            <v-btn  rounded width="100" @click="Addbutton()" color="primary">Save/Add</v-btn>
        </div>


            <v-dialog v-model="dialog" dark width="420">  
                  <template v-slot:activator="{attrs,on}" class="">
                            <v-badge  color="error" bordered :content="deletedata.length"  >  
                                <v-icon v-bind="attrs" v-on="on" large  color="primary" 
                                @click="btnDialog()">mdi-bell</v-icon>
                            </v-badge>
                </template>  




                <v-card >
                     <v-card-title >  Deleted Employees</v-card-title>
                      <v-card-text></v-card-text>
                       <v-card-actions>
                              <v-simple-table   alignment="center">
                                      <template v-slot:default >
                                            <thead>
                                                    <tr>
                                                      <th class="text-left">Employee ID</th>
                                                      <th class="text-left">Employee Name</th>
                                                      <th class="text-left">DeletedDate </th>
                                                    </tr>
                                            </thead>
                                            <tbody>
                                              <tr v-for="item in deletedata">
                                                    <!-- {{deletedata}} -->
                                                      <td>{{ item.emp_id }}</td>
                                                      <td>{{ item.emp_name }}</td>
                                                      <td>{{ item.DeletedDate }}</td>
                                                      <td><v-icon>mdi-user-plus</v-icon></td>
                                              </tr>
                                            </tbody>
                                        </template>
                              </v-simple-table>
                                  
                            </v-card-actions>
                </v-card>

      </v-dialog>

        <v-card-actions>
        <v-simple-table dense  width="100%">
          <template v-slot:default >
                  <thead>
                      <tr>
                          <th class="text-left" width="200px" >Employee No</th>
                          <th class="text-left"  width="350px">Employee name</th>
                          <th class="text-left"  width="200px" >Birth Date</th>
                          <th class="text-left"  width="200px">Date Hired</th>
                          <th class="text-left"  width="200px">UpdatedDate</th>
                          <th class="text-left"  width="300px">Updated By</th>
                          <th class="text-left"  width="200px">Action</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                    <tr v-for="item in users">
                          <td>
                            <v-text-field  v-model="item.emp_id"  v-if="item.edit" outlined dense  class="mt-6"></v-text-field>
                            <div v-else>  {{ item.emp_id }}</div></td>
                          <td>  <v-text-field  v-model="item.emp_name"  v-if="item.edit" outlined dense  class="mt-6"></v-text-field>
                            <div v-else>  {{ item.emp_name }}</div></td>
                          <td > <v-text-field  v-model="item.birthdate"  v-if="item.edit" outlined dense  class="mt-6"></v-text-field>
                            <div v-else>  {{ item.birthdate }}</div></td>
                          <td >  <v-text-field  v-model="item.Hired_date"  v-if="item.edit" outlined dense  class="mt-6"></v-text-field>
                            <div v-else>  {{ item.Hired_date }}</div></td>
                          <td > {{ item.UpdatedDate }}</td>
                          <td > {{ item.UpdatedByCode }}</td>
                          <td>
                            <div>
                                    <v-icon  color="primary"  @click="mEdit(item)" v-if="!item.edit">mdi-pencil</v-icon>
                                    <v-icon  color="warning"  @click="mUpdate(item)" v-else>mdi-update</v-icon>  
                                    <v-icon  color="red"  v-if="!item.edit" @click="mDelete(item)">mdi-delete</v-icon>
                                    <v-icon  @click="mCancel(item)" v-else>mdi-close</v-icon>
                            </div>
                        </td>
                    </tr>
                </tbody>
        </template>
      </v-simple-table>
      </v-card-actions>
      </v-card>
      

      



    <v-app>
</div>




    <script src="js/jquery.min.js"></script>
    <script src="js/vue.js"></script>
    <script src='js/axios.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  
    <!-- <script src="js/Myscript.js"></script>s -->
    <script>

    new Vue({
        el: '#myVue', 
        vuetify: new Vuetify(),
                data(){
                    return{
                        emp:{},
                        users:[] ,
                        menu:false,
                        menu2:false,
                        dialog:false,
                        deletedata:[]
                      }
                },

     created(){ 
         this.getInfo();
         this.getDeleted();
       },

    computed: {
      cDeleted(){
          return this.deletedata.filter(r=>{
            return r.DeletedDate != NULL 
          })
      }
    },
     methods: {
            getInfo(){
            axios.get('php/getbackend.php').then(res=>{
             this.users=res.data
                        })
                    },
            getDeleted(){
              axios.get('php/getDeleted.php').then(res=>{
                this.deletedata = res.data
                
              })
            },

             Addbutton(){
                    console.log(this.emp)
                    axios.post('php/backend.php', this.emp).then(res=>{
                      this.getInfo()
                    })
                        } ,
                        mEdit(val){
                          val.edit=true
                        },
                    mUpdate(val){
                val.edit=false
                axios.post('php/update.php', val)
              },
              mCancel(val){
                val.edit=false
              },
              mDelete(val){
                axios.post('php/delete.php',val).then(res=>{
                  this.getInfo()
                  this.getDeleted()
                })
              }, 

              btnDialog(){
                dialog:true

              }
                }  
    })
    </script>
</body>
</html> 