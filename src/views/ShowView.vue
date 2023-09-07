<template>
    <div class="container">
        <div class="about">

            <h1>{{ listdata.name }}</h1>
            
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--  v-for="c in contacts_list" :key="c.id" -->
                            <tr v-for=" c in contacts_list" :key="c.id">
                                <th scope="row">{{ c.id }}</th>
                                <td>{{ c.name }}</td>
                                <td>{{ c.email }}</td>
                                <td><router-link to="/show" class="btn btn-primary">Edit</router-link></td>
                            </tr>
                        </tbody>
                    </table>

                       <b-button id="show-btn" @click="showModal">Open Modal</b-button>


                       <b-modal ref="my-modal" hide-footer title="Using Component Methods">
                            <div class="d-block text-center">
                                <h3>Hello From My Modal!</h3>
                            </div>
                            <b-button class="mt-3" variant="outline-danger" block @click="hideModal">Close Me</b-button>
                            <b-button class="mt-2" variant="outline-warning" block @click="toggleModal">Toggle Me</b-button>
                        </b-modal>

                </div>
            </div>
        </div>
    </div>
</template>

<script >
 
    import axios from "axios";
    
    
    
    export default {
 
        data(){
            return{
                title:'Contact Manage',
                contacts_list:[],
                listdata: [{name:'hello world',}],
            }
        },
        method:{ 
            showModal(){
                alert(12);
            }
        },
        mounted() { 
            axios.get('http://localhost/api/get.php')
            .then(resp => {
                this.contacts_list = resp.data;
                console.log(resp.data);
            });
        },
    }
</script>



 