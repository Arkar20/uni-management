<template>
    <div>
           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Search
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       <div class="input-group ">
            <input type="text"
                    class="form-control"
                    placeholder="Search Your Course" 
                    aria-label="Recipient's username" 
                    aria-describedby="basic-addon2"
                    v-model="search"
                    @focus="fetchTheCourses"

                
              />
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2">Search</span>
            </div>
        </div>
       
      </div>
      <div class="modal-body">
        <ul class="list-group" v-for="list in filterSearchLists" v-bind:key="list.id" >
               <a :href="'/student/'+list.id" style="text-decoration: none;color:inherit">
                        <li class="list-group-item d-flex justify-content-around align-items-center">
                            {{list.name}}
                        </li>
                    </a>
                
        </ul>
        <h4>{{searchstatus}}</h4>
      </div>
    
    </div>
  </div>
</div>
    </div>
</template>
<script>
export default {
    data(){
        return {
            search:'',
            orgData:[],
            filterSearchLists:[],
            searchstatus:''
        }
    },
   
    watch:{
        search() {
            // this.fetchCourses() 
            
            this.filterSearch(this.search)
        },
        filterSearchLists(){
            if(this.filterSearchLists.length==0) this.searchstatus="No Data Found"
        }
    },
   
    methods:{
        fetchTheCourses(){
                this.searchstatus="searching..."

            fetch('/getallcourses').then(res=>res.json()).then(data=>{
                this.orgData=data
                this.filterSearchLists=data
                this.searchstatus=""
               
            }).catch(err=>this.searchstatus="something went wrong")
        },
        
        filterSearch(searchKeyword){
            this.searchstatus=''
             this.filterSearchLists=this.orgData.filter((course)=>{
               return course.name.includes(searchKeyword)
           })
            
        }
    }
}
</script>



<style lang="scss" scoped>

</style>