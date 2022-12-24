<template>

                                    <div v-for="post in posts" :key="post.id" class="col-md-12 blog-post">
                                  <div class="post-image">
                                  <img class="dash-post-img" :src="'uploads/'+post.image" alt="">
                                </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1>{{ post.title }}</h1></a>
                             
                                    </div>  
                                    <div class="post-info">
                                    	<div><span><i class="fa fa-calendar"></i><span>{{ post.created_at}}</span> </span><span class="post-info-writter"><i class="fa fa-user-o"></i> <span>{{ post.user }}</span></span></div>
                                      <a><i class="fa fa-book"></i>{{ post.category }}</a>   
                                    </div>
                                    <div class="post-data">
                                    <!-- <p> {{ post.details}}</p> -->
                                    <p v-html="post.details"></p>
                                    <router-link class="button button-style button-anim" :to="{name:'Post',params:{id:post.id}}">Read More</router-link>
                                    </div>  
                                </div>
                        
                                 
                            
</template>
<script>
export default{
  data(){
    return{
        posts:[]
    }
  },methods:{
    getPosts(){
     axios.get('/api/posts')
     .then((response)=>{
      this.posts=response.data
      console.log(this.posts)
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