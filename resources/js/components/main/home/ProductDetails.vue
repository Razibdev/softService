
<template>
    <div class="container">
        <div class="card">
            <div class="row" style="padding:10px; margin-top:30px;">
                <div class="col-2">
                    <img width="40" height="40" src="/vueimage/sc.png" alt="">
                </div>
                <div class="col-10">
                    <div class="input-group mb-3">
                        <input type="text" class="search_field_style form-control" placeholder="Search"  >
                        <div class="input-group-append">
                            <button class="btn btn-success" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card product_description_now">

            <div class="row" style="padding:10px; margin-top:30px;">
                <div class="col-12 col-md-4">
                    <div class="main_image">
                        <img style="width:100%; height: 341px;" :src="image" alt="">
                    </div>
                    <div class="second_image">
                        <div class="row">
                            <div class="col-4" v-for="image in images" :key="image.id" @click="changeImage(image.src)">
                                <img style="width:100px; height:100px;"  :src="image.src" alt="">
                            </div>


                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-5">

                    <div class="main_description">
                        <h5>Glossy Premium Plus Photo Paper A4 Size 20 Sheets/ Fujifilm Super Glossy Photo Paper 20 pages</h5>
                        <div class="row">
                            <div class="col-12 ratting_scs">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                            <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        </a> &nbsp;
                                        <a href="#">80 Ratings | </a>&nbsp;
                                        <a href="#">20 Answered Questions</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div  class="row">
                            <div class="col-12  ratting_scs">
                                <ul>
                                    <li>Brand: <a href="#">Apple</a> | <a href="#">More Paper Products from Fujifilm</a></li>
                                </ul>
                            </div>

                        </div>
                        <hr>
                        <h5 class="price_fixed">Tk. 115</h5>
                        <p><del class="text-muted">Tk 125</del> <span>8%</span></p>

                        <div>
                            <div class="qunatity_section">

                                <ul style="list-style:none; display:inline;">
                                    <li> Quantity: &nbsp;<i class="fa fa-minus" @click="quantityDecrease" aria-hidden="true"></i> <input type="text" name="" id="" :value="quantity"><i class="fa fa-plus" aria-hidden="true"  @click="quantityIncrease"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 click_cart_button">
                                <button class="btn btn-primary">Buy Now</button>
                            </div>

                            <div class="col-6 click_cart_button" >
                                <button class="btn btn-primary add_cart_section_button_click">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-md-3">
                    <div class="location">
                        <h5>Delivery</h5>
                        <div class="row address_location">
                            <div class="col-1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="col-10">
                                <p>Dhaka, Dhaka North, Banani Road No. 12 - 19</p>
                            </div>
                        </div>

                        <div class="row address_location">
                            <div class="col-1">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col-8">
                                        <p>Home Delivery</p>
                                        <span class="text-muted">2-5 day(s)</span>
                                    </div>
                                    <div class="col-4">
                                        <span>TK 55</span>
                                    </div>
                                    <div class="col-12 content-text">
                                        <div class="content-text-single">
                                            Enjoy free shipping promotion with minimum spend of ৳ 1,499 from Darun Online Shop.
                                        </div>

                                    </div>
                                </div>
                            </div>


                            <div class="col-1 cash-on-delivary">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                            </div>
                            <div class="col-10 cash-on-delivary" style="display: table-cell; vertical-align: middle;">
                                <p style="line-height: 14px;">Cash on Delivery Available	</p>
                            </div>



                        </div>

                        <div class="row address_location">
                            <div class="col-12">
                                <h5>Service</h5>
                            </div>

                            <div class="col-1">
                                <i class="fa fa-stop" aria-hidden="true"></i>
                            </div>

                            <div class="col-10">
                                <p>7 Days Returns</p>
                                <span class="text-muted">Change of mind is not applicable</span>
                            </div>


                            <div class="col-1">
                                <i class="fa fa-shield" aria-hidden="true"></i>
                            </div>
                            <div class="col-10">
                                <p>Warranty not available</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>



        </div>

        <div class="card product_descrition_description">
            <div class="row">
                <div class="col-12">
                    <h6>Product details of Gladiator Dashboard Polish Lemon 220ml, Motorcycle Polish, Bike Polish, Instant shine spray polish</h6>

                    <p>
                        Gladiator Dashboard Polish
                        Capacity: 220ml
                        Flavor: Lemon
                        Maintain the Dashboard Shine
                        Forms Unique Water-proof Shine
                        shake well before using
                        Spray evenly at a distance o f 15-25cm
                        Gently mop the surface to reveal brightness and glossiness
                        Remove Dust and Dirt From Dashboard
                        Gives Beautiful Shine and Restores New Look
                        Do not spray on steel wheel
                        keep away from child and animals
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h6>Ratings & Reviews of Gladiator Dashboard Polish Lemon 220ml, Motorcycle Polish, Bike Polish, Instant shine spray polish</h6>
                </div>
                <div class="col-12">
                    <div class="row review_ratting_main_section">
                        <div class="col-12 col-md-6">
                            <div class="ratting-total total-ratting-title" style="padding-left:20px"><span class="span-ratting-title">4.7</span>/ <span>5</span></div>
                            <div class="ratting-total">
                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                            </div>
                            <div >
                                <p class="text-muted">38 rattings</p>
                            </div>
                        </div>


                        <div class="col-12 col-md-6">
                            <div class="row">
                                <div class="col-12">

                                    <div class="row ratting-progress-stystem">
                                        <div class="col-6">
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    40% Complete (success)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 ratting-count-section">
                                            <span>31</span>
                                        </div>
                                    </div>

                                    <div class="row ratting-progress-stystem">
                                        <div class="col-6">
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    40% Complete (success)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 ratting-count-section">
                                            <span>31</span>
                                        </div>
                                    </div>

                                    <div class="row ratting-progress-stystem">
                                        <div class="col-6">
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    40% Complete (success)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 ratting-count-section">
                                            <span>31</span>
                                        </div>
                                    </div>

                                    <div class="row ratting-progress-stystem">
                                        <div class="col-6">
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    40% Complete (success)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 ratting-count-section">
                                            <span>31</span>
                                        </div>
                                    </div>


                                    <div class="row ratting-progress-stystem">
                                        <div class="col-6">
                                            <p>
                                                <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </p>
                                        </div>

                                        <div class="col-4">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                                     aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    40% Complete (success)
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-2 ratting-count-section">
                                            <span>31</span>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>







                    <div class="row product_review_section">
                        <div class="col-12">
                            <p class="product_review_title">Product Reviews</p>
                        </div>

                        <div class="col-12">
                            <div class="row product_review_section">
                                <div class="col-7 product_review_section_second" >
                                    <p>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                    </p><br>

                                    <p style="margin-top:-38px; color:green;" >by ashraful</p>


                                </div>

                                <div class="col-5 product_review_section_second">
                                    <p class="right">27 Apr 2022</p>
                                </div>


                                <div class="col-12">
                                    <p style="margin-top: -38px;">caile apnaraw nite paren....product good</p>
                                </div>

                                <div class="col-12">
                                    <img style="width:94px; height: 94px;" src="/vueimage/image1.png" alt="">
                                </div>
                            </div>
                        </div>





                        <div class="col-12">
                            <div class="row product_review_section">
                                <div class="col-6 product_review_section_second" >
                                    <p>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                    </p>

                                    <p style="margin-top:-38px; color:green;" >by ashraful</p>


                                </div>

                                <div class="col-6 product_review_section_second">
                                    <p class="right">27 Apr 2022</p>
                                </div>


                                <div class="col-12">
                                    <p style="margin-top: -38px;">caile apnaraw nite paren....product good</p>
                                </div>

                                <div class="col-12">
                                    <img style="width:94px; height: 94px;" src="/vueimage/image1.png" alt="">
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

    </div>
</template>

<script>


export default {
    data() {
        return {
            image:'/vueimage/image1.png',
            quantity:1,
            images: [
                {
                    id: 1,
                    src: '/vueimage/image1.png'
                },

                {
                    id: 2,
                    src: '/vueimage/image2.png'
                },

                {
                    id: 3,
                    src: '/vueimage/image4.png'
                },
            ]
        }
    },
    methods: {
        changeImage(image){
            this.image = image;
        },

        quantityIncrease(){
            this.quantity++;
        },

        quantityDecrease(){
            if(this.quantity == 1){
                return;
            }else{
                this.quantity--;

            }

        }
    },


}



</script>

<style lang="scss" scope>


.product_descrition_description{
    height: 100%;

    h6{
        padding: 15px !important;
    }
    p{
        padding: 15px !important;

    }

    .review_ratting_main_section{
        padding: 15px;
        .ratting-total{
            i{
                font-size: 30px;
            }
            padding-left: 15px;
            &.total-ratting-title{

                span{
                    font-size: 12px;
                    &.span-ratting-title{
                        font-size: 30px;
                    }
                }
            }
        }


        .ratting-progress-stystem{
            height: 31px;
            .progress{
                margin-top: 22px;
            }
            .ratting-count-section{
                margin-top: 18px;

            }
        }


        .product_review_section{

            margin-bottom: 30px;
            .product_review_title{
                padding: 10px 0;
            }

            .product_review_section{
                .product_review_section_second{
                    p{
                        font-size: 12px;
                        overflow: hidden;
                        word-break: break-word;
                        color: #757575;


                        &.right{
                            float: right !important;
                        }
                    }
                }
            }
        }


    }



}












.location{
    h5{
        display: table-cell;
        font-size: 12px;
        color: #757575;
        font-weight: 500;
        font-family: Roboto-Medium;
        width: 300px;
        margin-bottom: 5px;
    }

    .address_location{
        margin-top: 10px;
        margin-bottom: 10px;

        i{
            color: #757575 !important;
        }
        p{
            display: table-cell;
            vertical-align: middle;
            color: #202020;
            padding-right: 5px;
        }

        .content-text{
            font-size: 13px;
            background-color: #fff;
            padding: 8px;
            margin: 8px 0 0 5px;
            -webkit-box-shadow: 0 1px 1px 0 #dadada;
            box-shadow: 0 1px 1px 0 #dadada;
            border-radius: 2px;
            .content-text-single{
                word-break: break-word;
            }
        }

        .cash-on-delivary{
            display: table-cell;
            vertical-align: middle;
            margin-top: 10px;
            margin-bottom: 20px;
            p{
                margin-top: 5px;
                line-height: 14px;
            }
        }

    }
}

.click_cart_button{
    margin-bottom: 20px;
    button{
        padding: 0;
        width: 145px;
        text-align: center;
        margin-right: 10px;
        height: 44px;
        background: #2abbe8;
        &:hover{
            border-color: #26abd4;
            background: #26abd4;
        }

        &.add_cart_section_button_click{
            border: 1px solid #f57224;
            background: #f57224;

            &:hover{
                background: #d0611e;
            }
        }
    }

}

.qunatity_section{
    padding: 20px 0;
    ul {
        li{
            input{
                width: 70px;
                height: 30px;
                padding: 2px;
                color: #212121 !important;
                opacity: .7;
                text-align: center;


            }

            i{
                padding: 5px;
                border-radius: 50%;
                cursor: pointer;
                color: #212121 !important;
                font-size: 20px;
                opacity: .7;

            }
        }
    }
}












.main_description{
    h5{
        color: #212121;
        font-size: 22px;
        font-weight: 400;
        word-break: break-word;
        // word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .ratting_scs{
        display:block;
        width: 100%;
        ul{
            list-style: none;
            display: block;
            width: 100%;
            li{
                color: #9e9e9e;
                font-size: 12px;
                a{
                    font-size: 12px;

                }
            }

        }
    }

    .price_fixed{
        color: #f57224;
        font-size: 30px;
    }


}






.search_field_style{
    padding: 20px;
    opacity: .8;
    border: 1px solid #ced4da;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;

}

.search_field_style:focus{
    outline: none;
    border: none;
}



.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    margin-top: 10px;
}

.product_description_now{
    height: 100%;
}

.main_image{
    padding: 5px;
}

.second_image{
    padding: 5px;
    margin-bottom: 20px;
}

// .card:hover {
//   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
// }








</style>
