<template>
    <div class="container">
        <div class="about">
            <h1>{{ data }}</h1>
            
            <div class="row">
                <div class="col-md-12">
                    <form v-on:submit.prevent="sendData" method="POST" action="">
                        <div class="form-group">
                            <input type="text" v-model="name" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <input type="email" v-model="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <input type="password" v-model="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" v-model="comment" id="Comments" placeholder="Comments" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" v-model="status" id="status">
                                <option value="" selected>Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">InActive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script >

    import { toast } from 'vue3-toastify';
    import 'vue3-toastify/dist/index.css';
    import axios from "axios";
    
    export default {
 
        data(){
            return{
                title:'Create user list',

                name:'',
                    email:'',
                    password:'',
                    comment:'',
                    status:'',
                 
                toastCount: 0,
                image:'',
                data:''
            }
        },
        methods: { 

            sendData() {
                  
                if(this.name == ''){
                    toast.info('Please enter your name!',{
                        autoClose: 5000,
                    }); 
                }

                const formData = {name:this.name, email:this.email, password:this.password, comment:this.comment, status:this.status} 

               axios.get("http://localhost/api/contacts.php", formData)

                // axios({
                //     method: 'post',
                //     url: 'api/contacts.php',
                //     data: formData,
                //     config: { headers: {'Content-Type': 'multipart/form-data' }}
                // })
                // .then(function (response) {
                //     console.log(response)
                // })
                // .catch(function (response) {
                //     console.log(response)
                // });
                
                axios.post('http://localhost/api/post.php', formData)
                    .then(response => {
                       // Handle the response from the server
                       console.log(response);
                    })
                    .catch(error => {
                       // Handle any errors
                        console.error(error);
                    });
            },

            // async doCreate() {

            //     if(this.name == ''){
            //         // toast('Please enter your name!');
            //         toast.info('Please enter your name!',{
            //             autoClose: 5000,
            //         }); 
            //     }

            //     const formData = {name:this.name, email:this.email, password:this.password, comment:this.comment, status:this.status}

            //     await axios.post("http://localhost/api/post.php", formData);

            //     // axios.get("http://localhost/api/contacts.php", formData)

            //     // axios({
            //     //     method: 'post',
            //     //     url: 'api/contacts.php',
            //     //     data: formData,
            //     //     config: { headers: {'Content-Type': 'multipart/form-data' }}
            //     // })
            //     // .then(function (response) {
            //     //     console.log(response)
            //     // })
            //     // .catch(function (response) {
            //     //     console.log(response)
            //     // });
                
            //     //const formData = new FormData();
            //     //  formData.append("foo", "bar");
            //     // const { data } = await axios.post("http://localhost:8080/postData.php", formData);
            //     //this.response = data;
            // },

            

            
			// doCreate: function () {
            //     if(this.name == ''){
            //         // toast('Please enter your name!');
            //         toast.info('Please enter your name!',{
            //             autoClose: 5000,
            //         });
            //         // toast.success('Wow success!',{
            //         //     autoClose: 1000,
            //         // });
            //         // toast.warning('Wow warning!',{
            //         //     autoClose: 1000,
            //         // });
            //     }
            //     var Fromdata = {name:this.name, email:this.email, password:this.password, comment:this.comment, status:this.status} 
               
            //     alert(process.env.ROOT_API);
            //     //axios.get(process.env.ROOT_API+'/ajaxfile.php?data='+Fromdata)

            //     //axios.get("http://localhost:8080/create");
            //     //const self = this;
			// 	// const form = event.target;

			// 	// const ajax = new XMLHttpRequest();
			// 	// ajax.open("POST", form.getAttribute("action"), true);
			// },

            async getAnswer() {

                const { data } = await axios.get("http://localhost/api/contacts.php");
                this.data = data;
                console.log(data);
                
            },

            // loadData: function() { 
            //     this.http.get('/notifications').then((response) => { 
            //         this.message = "This is a message"; 
            //         console.log(this.message);
            //     }); 
            // },
		},
        mounted() {
            this.getAnswer();
        },
    }
</script>



 