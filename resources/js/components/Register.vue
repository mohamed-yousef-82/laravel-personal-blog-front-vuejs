<template>
                                  <!-- Contact Me Start -->
                                  <div class="post-title margin-top-70">
                                 <h1>Register</h1>
                                </div>
                               <div class="row margin-top-30">
                                 <div class="col-md-12">   
                                 <div class="row">
                                  <div class="alert alert-danger">
                                      <ul>
                                              <li>lklkkj</li>
                                      </ul>
                                  </div>
                              <div class="alert alert-success">
                                 gdfgdfgfd
                              </div>
                                  <form action="" method="post" @submit.prevent="submit">
                              <div class="col-sm-12">
                               <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name" v-model="fields.name">
                               </div>
                                    </div>
                                   <div class="col-sm-12">
                                <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Your Email" v-model="fields.email">
                               </div>
                                    </div>
                                   <div class="col-sm-12">
                               <div class="form-group">
                               <input type="password" name="password" class="form-control" placeholder="password" v-model="fields.password">
                               </div>
                                    </div>
                                    <div class="col-sm-12">
                               <div class="form-group">
                               <input type="password" name="password_confirm" class="form-control" placeholder="password confirm"  v-model="fields.password_confirm">
                               </div>
                                    </div>
                                  <div class="col-sm-12">
                               <div class="text-left">      
                               <button type="submit" class="btn btn-primary" style="margin-bottom:20px ">Register</button>
                               </div>
                              </div>
                                </form>
                               </div>
                             </div>
                            </div>
                            <!-- Contact Me End -->
                            </template>
                            <script>
                            export default{
                              data(){
                                return{
                                fields:{

                                }
                                }
                              },methods:{
                                submit(){
                                 axios.post('/api/register',this.fields)
                                 .then(()=>{
                                  this.$router.push({name:'dashboard'})
                                 }).catch((error)=>{
                                  console.log(error.response.data)
                                 })
                                }
                            }
                            }
                            </script>