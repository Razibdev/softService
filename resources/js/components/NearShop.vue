<template>
    <div class="row">
        <div class="col-md-3" v-for="cat in data" :key="cat.id">
        <div class="card" style="height: 330px">
            <div class="bg-white shadow rounded overflow-hidden" style="height: 330px" >
                <div class="px-4 pt-0 pb-4 cover"
                v-bind:style="{ 'backgroundImage': 'url(' + '/storage/user/profile/cover/'+cat.cover_image + ')' }"
                    style="background-size: cover; background-repeat: no-repeat;background-position: center center;">
                    <div class="media align-items-end profile-head" style=" transform: translateY(5rem);">
                        <div class="profile mr-3" v-if="cat.website_link">
                                <a :href="cat.website_link" target="_blank">

                                    <img :src="'/storage/user/profile/'+cat.img_name"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"
                                        height="61"
                                    style="border-radius: 50% !important; height:61px !important"
                                    
                                    v-if="cat.category.business_type == 'service'"
                                >

                                <img :src="'/storage/user/profile/'+cat.img_name"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"
                                         style="height:61px !important"
                                    v-else
                                >
                                </a>
                                
                            <a :href="cat.website_link"
                                class="btn w3-purple btn-sm btn-block" target="_blank">{{cat.name.toUpperCase().substring(0, 15)}}</a>


                        </div>
                         <div class="profile mr-3" v-else>


                 
                                <a  :href="'/profile/'+cat.id+'/details/subscription/'+subscriber.subscription_code"  >

                                     <img :src="'/storage/user/profile/'+cat.img_name"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"
                                         height="61" 
                                    style="border-radius: 50% !important; height:61px !important"
                                    v-if="cat.category.business_type == 'service'"
                                >

                                <img :src="'/storage/user/profile/'+cat.img_name"
                                        alt="..." width="130" class="rounded mb-2 img-thumbnail"
                                        style="height:61px !important"
                                    v-else
                                >
                            </a>
                            
                            <a  :href="'/profile/'+cat.id+'/details/subscription/'+subscriber.subscription_code"  
                                class="btn w3-purple btn-sm btn-block">{{cat.name.toUpperCase().substring(0, 15)}}</a>

                
                            </div>

                            </div>
                            </div>

                            <div class="bg-light p-2 d-flex justify-content-end text-center">
                                <ul class="list-inline mb-0"  v-if="cat.website_link">

                                    <br><br><br>
                                </ul>
                                <ul  class="list-inline mb-0" v-else>

                              <br>

                                    <li v-if="cat.category.business_type == 'service'" class="list-inline-item">
                                         <h5 class="font-weight-bold mb-0 d-block">
                                                    <!-- {{countItem(cat.id)}} -->
                                                    <service-item :id="cat.id"></service-item>
                                                    
                                                </h5>
                                                <small class="text-muted"> <i class="fas fa-image mr-1"></i>Item</small>
                                    </li>
                                    <li class="list-inline-item" v-else>
                                         <h5 class="font-weight-bold mb-0 d-block">
                                                    <!-- {{countItemP(cat.id)}}  {{countValues}} -->
                                                    <!-- {{cat.service.products_count}} -->
                                                    <service-product :id="cat.id"></service-product>
                                                </h5>
                                                <small class="text-muted"> <i class="fas fa-image mr-1"></i>Products</small>
                                    </li>
                                
                        

                                </ul>
                            </div>
                            <div class="bg-light px-3">
                                <ul class="list-inline mb-0">
                                    <li title="Add To Favourite" class="list-inline-item">
                                        <a class="addTofavourite"
                                       :href="'/mypanel/dashboard/add/to/favourite/type/service_profile/typeid/'+cat.id"
                                          >

                                           <service-favorite :id="cat.id"></service-favorite>



                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                     
                                            <span v-if="cat.open" title="Shop/Service Open" class="text-success p-2"><i class="fas fa-check rounded-circle"></i>
                                                Open</span>
                                       
                                            <span v-else title="Shop/Service Closed" class="text-danger p-2"><i class="fas fa-times"></i>
                                                Closed</span>
                                    </li>
                                    <li class="list-inline-item">
                                   
                                            <span v-if="cat.package_status == 'regular'" class=""><img title="Regular" src="/img/badge/regular.png"
                                                    width="30px" alt="" srcset=""></span>
                                      
                                            <span v-else-if="cat.package_status =='golden'" class=""><img title="Golden" src="/img/badge/golden.png"
                                                    width="30px" alt="" srcset=""></span>
                                       
                                            <span  v-else-if="cat.package_status =='merchant'"  class=""><img title="Merchant" src="/img/badge/merchant.png"
                                                    width="30px" alt="" srcset=""></span>
                                       
                                            <span v-else class="">
                                                <img title="Free" src="/img/badge/free.png" width="30px"
                                                    alt="" srcset=""></span>
                                       
                                       
                                            <span v-if="cat.paystatus == true" class=""><img title="Paid" src="/img/badge/paid.png"
                                                width="30px" alt="" srcset="" style="width:30px !important"></span>

                               
                                            <span v-else class=""><img title="Trial" src="/img/badge/free.png"
                                                width="30px" alt="" srcset="" style="width:30px !important"></span>


                                    </li>

                                </ul>
                            </div>
                            <div class="px-4 py-3">
                                <p class="small mb-0"> <strong>Location:
                                    </strong>{{ cat.address }}
                                </p>

                               
                             
                                    <p class="small mb-4 mt-0"> <strong>Distance:
                                        </strong> {{disformat(cat.distance)}} KM</p>
                              
                            </div>

            </div>
        </div>
    </div>
     </div>
</template>

<script>

import ServiceItem from './NearSearch/ServiceItem.vue';
import ServiceProduct from './NearSearch/ServiceProduct.vue'
import ServiceFavorite from './NearSearch/ServiceFavorite.vue'
export default {
    data(){
        return{
            page:1,
            data:[],
            last_page:1,
            long:"",
            lat:"",
            locationErrorMessage:'',
            subscriber:'',
            countValue:0,
            countValues:0
        }
    },
    components:{
        ServiceItem, ServiceProduct, ServiceFavorite
    },
    methods: {
        disformat(distance){
            return (Number(distance) / 1000).toLocaleString();

            //  {{Number(cat.distance).toLocaleString()}}
        },

       async fetchShops(page){
            // console.log('function');
                let data = await axios.get(`/mypanel/user/dashboard/fetchdata?page=${page}`, {
                                params: {
                                    shopName: this.shopName,
                                    long: this.long,
                                    lat: this.lat,
                                }
                            });

           console.log(data.data);
           this.data.push(...data.data.data.data);
           this.last_page = data.data.data.last_page;
           this.subscriber = data.data.subscriber;
        
        },

        getLocation(closure) {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition((position) => {
                    this.long = position.coords.longitude;
                    this.lat = position.coords.latitude;
                    this.locationErrorMessage = "";
                    console.log(this.long);
                    console.log(this.lat);
                    closure()
                }, (error) => {
                    if (error.code === 1) {
                        this.locationErrorMessage = "Please allow location access.";
                       alert(this.locationErrorMessage);
                    }
                });
            } else { 
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        },
        handleScroll(){
            if(window.scrollY+window.innerHeight >= document.body.scrollHeight - 50){
                this.page++;
                // alert('ok');
                if(this.page <= this.last_page){
                    //  this.getLocation(() =>{
                    this.fetchShops(this.page);
                    //  });
                }
            }
        },

        // countItem(item){
        //   axios.get(`/mypanel/user/dashboard/fetchitem//${item}`)
        //   .then(res =>{
        //       console.log(item);
        //       console.log(res.item);

        //         return res.data.item;
        //   });
        // },

       
    },

    mounted() {
         this.getLocation(() =>{
            this.fetchShops(this.page);
            // console.log('ok');
            window.addEventListener('scroll', this.handleScroll);
         });


    },

    
}
</script>