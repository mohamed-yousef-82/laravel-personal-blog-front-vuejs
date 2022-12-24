<template>
                          <div class="col-md-12 content-page">
                                    <div class="col-md-12 blog-post">
                                  <div class="post-image">
                                  <img class="dash-post-img" :src="'../uploads/'+post.image" alt="">
                                </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1>{{ post.title }}</h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<div><span><i class="fa fa-calendar"></i><span>{{ post.created_at}}</span> </span><span class="post-info-writter"><i class="fa fa-user-o"></i> <span>username</span></span></div>
                                      <a><i class="fa fa-book"></i>{{ post.category_id }}</a>   
                                    </div>
                                    <div class="post-data">
                                    <!-- <p> {{ post.details}}</p> -->
                                    <p v-html="post.details"></p>
                                    </div>  
                                </div>
                                <!-- Blog Post End -->
                            </div>
</template>
<script>
export default{
    props:["id"],
  data(){
    return{
        post:{}
    }
  },methods:{
    getPosts(){
     axios.get('/api/post/'+this.id)
     .then((response)=>{
      this.post=response.data
      console.log(this.post)
     }).catch((error)=>{
      console.log(error.response.data)
     })
    }
},
mounted(){
    this.getPosts()
}
}
</script>