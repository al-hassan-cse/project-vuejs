<template>
    <div class="container">
        <div class="about">
            <h1>{{ title }}</h1>
            <div class="row">
                <div class="col-md-12">
                    <form v-on:submit.prevent="doCreate" method="POST" action="create.php">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" placeholder="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="Comments" placeholder="Comments" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Active</option>
                                <option>InActive</option>
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
<script>
    export default {
        data(){
            return{
                title:'Create user list'
            }
        },
        methods: { 
			doCreate: function () {
				alert(111);
			}
		}
    }
</script>



 