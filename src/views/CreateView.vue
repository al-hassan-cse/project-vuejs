<template>
    <div class="container">
        <div class="about">
            <h1>{{ title }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <form v-on:submit.prevent="doCreate" method="POST" action="create.php">
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

     import { toast } from 'vue-sonner'
    // import $ from 'jquery'

    export default {
 
        data(){
            return{
                title:'Create user list',
                name:'',
                email:'',
                password:'',
                comment:'',
                status:'',
                toastCount: 0
            }
        },
        methods: { 

           
			doCreate: function () {
toast.success('Event has been created')
              // this.$toasted.success("Success Message");
				alert(111);
                var Fromdata = {name:this.name, email:this.email, password:this.password, comment:this.comment, status:this.status}
                console.log(Fromdata);
                //const self = this;
				// const form = event.target;

				// const ajax = new XMLHttpRequest();
				// ajax.open("POST", form.getAttribute("action"), true);

			}
		}
    }
</script>



 