@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --pink:#ef5777;
   --white:#fff;
   --black:#222;
   --transparent-white:rgba(255,255,255,.3);
   --border:.2rem solid var(--black);
   --box-shadow:0 .5rem 1.5rem rgba(0,0,0,.1);
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

html::-webkit-scrollbar{
   width: 1rem;
}

html::-webkit-scrollbar-track{
   background: transparent;
}

html::-webkit-scrollbar-thumb{
   background: var(--pink);
}

body{
   background: url(../images/background-img.png) no-repeat;
   background-size: cover;
   background-position: center;
   background-attachment: fixed;
}

.container{
   border-radius: .5rem;
   overflow: hidden;
   background: var(--transparent-white);
   backdrop-filter: blur(.5rem);
   max-width: 1200px;
   margin:10rem auto;
   box-shadow: var(--box-shadow);
   /* margin-bottom: 15rem; */
}

.heading{
   text-align: center;
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 2rem;
   font-size: 5rem;
}

.btn{
   display: inline-block;
   padding:1rem 3rem;
   border:var(--border);
   background: var(--transparent-white);
   color:var(--black);
   border-radius: .5rem;
   font-size: 1.7rem;
   text-transform: capitalize;
   margin-top: 1rem;
   cursor: pointer;
}

.btn:hover{
   background: var(--black);
   color:var(--white);
}

section{
   padding:2rem;
}

.header{
   position: relative;
   z-index: 1000;
   background: var(--transparent-white);
   display: flex;
   align-items: center;
   justify-content: space-between;
}

.header .logo{
   font-size: 2.5rem;
   color:var(--black);
}

.header .navbar a{
   font-size: 2rem;
   margin-left: 2rem;
   color:var(--black);
}

.header .navbar a:hover{
   color:var(--pink);
}

#menu-btn{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
   display: none;
}

.home{
   padding-bottom: 0;
}

.home .slide{
   min-height: 60rem;
   border-radius: .5rem;
   display: flex;
   align-items: center;
   justify-content: center;
   padding:2rem;
   margin-bottom: 4rem;
   background-size: cover !important;
   background-position: center !important;
}

.home .slide .content{
   background: var(--transparent-white);
   border-radius: .5rem;
   backdrop-filter: blur(.5rem);
   box-shadow: var(--box-shadow);
   text-align: center;
   padding:2rem;
   width:50rem;
}

.home .slide .content h3{
   font-size: 3rem;
   color:var(--black);
   text-transform: uppercase;
}

.home .slide .content p{
   font-size: 1.5rem;
   color:var(--black);
   padding:1rem 0;
   line-height: 2;
}

@keyframes PopUp {
   0%{
      transform: scale(0);
   }
}

.home .swiper-slide-active .content{
   animation:PopUp .2s linear backwards .2s;
}

.swiper-pagination{
   bottom:0 !important;
}

.swiper-pagination-bullet-active{
   background: var(--pink);
}

.services .slide{
   height: 35rem;
   overflow: hidden;
   position: relative;
   user-select: none;
   margin-bottom: 4rem;
}

.services .slide img{
   height: 100%;
   width: 100%;
   object-fit: cover;
   transition: .2s linear;
}

.services .slide:hover img{
   transform: scale(1.1);
}

.services .slide .content{
   position: absolute;
   bottom:0; left:0; right:0;
   background: var(--transparent-white);
   backdrop-filter: blur(.5rem);
   padding:2rem;
   text-align: center;
   transition: .2s linear;
   transform: translateY(calc(100% - 6.5rem));
}

.services .slide:hover .content{
   transform: translateY(0);
}

.services .slide .content h3{
   font-size: 2rem;
   color:var(--black);
   text-transform: uppercase;
}

.services .slide .content p{
   font-size: 1.5rem;
   color:var(--black);
   padding:1rem 0;
   line-height: 2;
}

.about{
   text-align: center;
   max-width: 60rem;
   margin:0 auto;
}

.about img{
   width: 100%;
   margin-bottom: 1rem;
}

.about h3{
   font-size: 3rem;
   text-transform: uppercase;
   color:var(--black);
}

.about p{
   font-size: 1.5rem;
   padding:1rem 0;
   line-height: 2;
   color:var(--black);
}

.team .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap:1.5rem;
}

.team .box-container .box{
   border-radius: .5rem;
   background: var(--transparent-white);
   padding:2rem;
   text-align: center;
   box-shadow: var(--box-shadow);
}

.team .box-container .box img{
   border-radius: 50%;
   height: 15rem;
   width: 15rem;
   object-fit: cover;
   margin-bottom: 1rem;
}

.team .box-container .box h3{
   font-size: 2rem;
   color:var(--black);
   text-transform: capitalize;
}

.team .box-container .box p{
   font-size: 1.5rem;
   color:var(--pink);
}

.team .box-container .box .share{
   margin-top: .5rem;
}

.team .box-container .box .share a{
   height: 4rem;
   width: 4rem;
   line-height: 4rem;
   font-size: 1.7rem;
   background: var(--black);
   border-radius: .5rem;
   color:var(--white);
   margin: .5rem 0;
}

.team .box-container .box .share a:hover{
   background: var(--pink);
}

.portfolio .portfolio-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
}

.portfolio .portfolio-container .box{
   background: var(--transparent-white);
   border-radius: .5rem;
   overflow: hidden;
   box-shadow: var(--box-shadow);
}

.portfolio .portfolio-container .box .image{
   height: 25rem;
   overflow: hidden;
}

.portfolio .portfolio-container .box .image img{
   transition: .2s linear;
   height: 100%;
   width: 100%;
   object-fit: cover;
}

.portfolio .portfolio-container .box:hover .image img{
   transform: scale(1.1);
}

.portfolio .portfolio-container .box h3{
   font-size: 2rem;
   color:var(--black);
   text-align: center;
   padding:1rem;
   text-transform: uppercase;
}

.pricing .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
   gap:1.5rem;
}

.pricing .box-container .box{
   text-align: center;
   border-radius: .5rem;
   background: var(--transparent-white);
   box-shadow: var(--box-shadow);
   padding:2rem;
}

.pricing .box-container .box h3{
   font-size: 2rem;
   text-transform: uppercase; 
   color:var(--black);
}

.pricing .box-container .box .price{
   padding:1rem;
   border-radius: .5rem;
   background: var(--pink);
   color:var(--white);
   font-size: 3rem;
   margin:1rem 0;
}

.pricing .box-container .box .list p{
   font-size: 1.5rem;
   color:var(--black);
   padding:1rem 0;
}

.pricing .box-container .box .list p i{
   padding-right: .5rem;
   color:var(--pink);
}

.reviews .slide{
   margin-bottom: 4rem;
   border-radius: .5rem;
   box-shadow: var(--box-shadow);
   text-align: center;
   padding:2rem;
   background: var(--transparent-white);
   user-select: none;
}

.reviews .slide img{
   height: 7rem;
   width: 7rem;
   border-radius: 50%;
   margin-bottom: .5rem;
}

.reviews .slide h3{
   font-size: 2rem;
   color:var(--black);
   text-transform: capitalize;
}

.reviews .slide p{
   font-size: 1.5rem;
   line-height: 2;
   color:var(--black);
   padding:1rem 0;
}

.reviews .slide .stars{
   margin-top: .5rem;
}

.reviews .slide .stars i{
   font-size: 1.7rem;
   color:var(--pink);
}

.contact form{
   padding:2rem;
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
   background: var(--transparent-white);
}

.contact form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:2rem;
}

.contact form .flex .inputBox{
   flex:1 1 41rem;
}

.contact form .flex .inputBox span{
   display: block;
   margin-bottom: 1rem;
   font-size: 2rem;
   color:var(--black);
}

.contact form .flex .inputBox input,
.contact form .flex .inputBox textarea,
.contact form .flex .inputBox select{
   width: 100%;
   padding:1.2rem 1.4rem;
   border:var(--border);
   border-radius: .5rem;
   font-size: 1.7rem;
   background: var(--transparent-white);
}

.contact form .flex .inputBox textarea{
   height: 20rem;
   resize: none;
}

.contact form .btn{
   margin-top: 2rem;
}





.footer{
   background: var(--transparent-white);
}

.footer .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
   gap:2rem;
}

.footer .box-container .box h3{
   font-size: 2.2rem;
   text-transform: uppercase;
   color:var(--black);
   padding:1rem 0;
}

.footer .box-container .box a{
   display: block;
   font-size: 1.5rem;
   color:var(--black);
   padding:1rem 0;
}

.footer .box-container .box a i{
   color:var(--pink);
   padding-right: .5rem;
   transition: .2s linear;
}

.footer .box-container .box a:hover i{
   padding-right: 2rem;
}

.footer .credit{
   text-align: center;
   margin-top: 2rem;
   padding-top: 2rem;
   border-top: var(--border);
   color:var(--black);
   font-size: 2rem;
   padding-bottom: 1rem;
}

.footer .credit span{
   color:var(--pink);
}



/* media queries  */

@media (max-width:1200px){

   .container{
      margin:5rem 10rem;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

   .container{
      margin:5rem;
   }

}

@media (max-width:768px){

   .heading{
      font-size: 3.5rem;
   }

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background: var(--white);
      border-top: var(--border);
      padding:2rem;
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
   }

   .header .navbar a{
      display: block;
      margin:2rem;
      text-align: center;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .container{
      margin:2rem;
   }

   .services .slide .content p{
      font-size: 1.3rem;
   }

   .contact form .btn{
      display: block;
      width: 100%;
   }

}