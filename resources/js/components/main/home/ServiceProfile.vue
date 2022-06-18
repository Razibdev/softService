<template>
    <div class="container">

        <div id="one">

            <div class="profile">

                <img width="120" height="120" src="/vueimage/profile.jpg" alt="">
                <h4>Name</h4>

            </div>

        </div>

        <br>


        <div class="text">

            <nav class="">
                <form class="form-inline">
                    <button class="btn btn-outline-secondary" type="button"  @click.prevent="description" @click="activeBtn = 'btn1'" :class="{active: activeBtn === 'btn1' }">Description</button>
                    <button class="btn btn-outline-secondary" type="button"  @click.prevent="legal" @click="activeBtn = 'btn2'" :class="{active: activeBtn === 'btn2' }">Legal Information</button>
                    <button class="btn btn-outline-secondary" type="button"  @click.prevent="com" @click="activeBtn = 'btn3'" :class="{active: activeBtn === 'btn3' }">Communication</button>
                </form>
            </nav>
            <hr>
            <div class="description" v-if="isDescription">
                <h4>Description:</h4><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu lacus nulla. Morbi suscipit nunc erat, luctus vulputate ex malesuada id. Sed efficitur neque eu dolor elementum, eget hendrerit lectus vestibulum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed vitae tincidunt sem. Maecenas vitae eros vitae nulla tristique gravida. Quisque feugiat aliquam ipsum, id dictum ligula mattis at. In at ullamcorper urna, at aliquet nisl.
        </span>

            </div>
            <div class="legal-information"  v-if="isLegal">
                <h4>Legal Information:</h4><span>Legal Infos here</span>


            </div>
            <div class="communication"  v-if="isCom">
                <h4>Communication:</h4><span>Demo communication message</span>

            </div>

        </div>

        <hr>

        <div class="product">
            <h5>Exclusive items from our shop</h5>


            <!-- ------------------------ -->

            <div class="row my-3">

                <div class="col-6 col-xs-6 col-sm-6 col-md-3 bg-white">
                    <img class="col-md-12" src="/vueimage/p1.jpg" height="200px" style="width:250px !important; height: 150px !important;">
                    <p class="text-header">UX Black Wired Heavy Bass Earphone</p>
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                    </a> &nbsp;
                                    <a href="#">19</a>&nbsp;

                                </li>
                            </ul>
                        </div>
                    </div>
                    <span><sup>TK</sup> 4500</span>

                    <br><span id="delivery">Free Delivery</span>

                </div>

                <div class="col-6 col-xs-6 col-sm-6 col-md-3 bg-white">
                    <img class="col-md-12" src="/vueimage/p2.jpg" style="width:250px !important; height: 150px !important;">
                    <p class="text-header" >Sara Shoulder Bag Color Black</p>
                    <div class="row">
                        <div class="col-12">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                    </a> &nbsp;
                                    <a href="#">12</a>&nbsp;

                                </li>
                            </ul>
                        </div>
                    </div>
                    <span><sup>TK</sup> 98,000</span>

                    <br><span id="">Free Delivery</span>
                </div>

                <div class="col-6 col-xs-6 col-sm-6 col-md-3 bg-white">
                    <img class="col-md-12" src="/vueimage/p3.jpg" style="width:250px !important; height: 150px !important;">
                    <p class="text-header" >Sara Shoulder Bag Color Black</p>
                    <div class="row">
                        <div class="col-12">

                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                        <i class="fa fa-star" aria-hidden="true" style="color:yellow !important;"></i>
                                    </a> &nbsp;
                                    <a href="#">7</a>&nbsp;

                                </li>
                            </ul>
                        </div>
                    </div>
                    <span><sup>TK</sup> 1250</span>

                    <br><span id="delivery">Free Delivery</span>
                </div>




            </div>




            <!-- ------------------------ -->


        </div>


        <br><br><br>




    </div>
</template>

<script>
export default {
    data(){
        return {
            isDescription: true,
            isLegal: false,
            isCom: false,

        }
    },

    methods:{
        description(){
            this.isDescription = true;
            this.isLegal = false;
            this.isCom = false;

        },
        legal(){
            this.isLegal = true;
            this.isDescription = false;
            this.isCom = false;

        },
        com(){
            this.isCom = true;
            this.isDescription = false;
            this.isLegal = false;

        },

    }
}
</script>


<style>

#one
{
    display: flex;
    align-items: flex-end;
    height: 40vh;
    margin: auto;
    margin-top: 1vw;
    background-image: url("/vueimage/shop2.jpg");
    background-repeat: no-repeat;
    background-position: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.profile
{
    padding: 5px;
    margin-left: 2vw;
    margin-bottom: 1vw;
    background-color: white;
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    /* border: 1px solid green; */
}

.text span
{
    color: grey;
}

.product
{
    margin-bottom: 5vw;
}

.product h5
{
    color: rgb(204, 102,0);
}
.text-header
{
    color: rgb(0, 115, 149);
    margin-left: 1vw;
}


.card-text
{
    color: rgb(0, 115, 149)
}

ul
{
    list-style: none;
}
#delivery
{
    color: red;
    font-size: 15px;
}
.btn
{
    margin-right: 3px;
    margin-bottom: 3px;
}

</style>

