<style type="text/css">

html{
    scroll-behavior: smooth;
}

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box ;
    font-family: 'Mulish', sans-serif;
}
.row{
    margin-left: 0 !important; 
    margin-right: 0!important;
}

.nav_style{
    background-color: #B71DDE !important;
}

.nav_style a{
    color: white;
}

/* .navbtn{
    background-color: #58f51f00!important;
} */
/*/// main header////*/

.main_header{
    height: 450%;
    width: 100%;

}
.right h1{
    font-size: 3rem;
}
.left img{
    animation: heatbeat 5s linear infinite;

}
@keyframes heatbeat
 {
    0%
    {
        transform: scale( .75);
    }
    20%
    {
        transform: scale( 1);
    }
    0%
    {
        transform: scale( .75);
    }
    40%
    {
        transform: scale( .75);
    }
    60%
    {
        transform: scale( 1);
    }
    80%
    {
        transform: scale( .75);
    }
    100%
    {
        transform: scale( .75);
    }
}
/*/////////////////////About scrtion///////////////////*/

.img img{
    height: 450%;
    width: 100%;

}

.sub_saction{
    background-color: #D3D3D3;
}
.about_res{
    margin-left:0!important
}

/*/////////////////////footer///////////////////*/

.footer_style{
background-color: #B71DDE!important;
}


.footer_style p{
 margin-bottom: 0!important;
}
/*/////////////////////icons///////////////////*/
.container_div{
height: 10vh;
display: flex;
justify-content: center;
align-items:center;
margin: 25px;;

}
.container_div a{
height: 100px;
width:100px;
background-color: #f5f6fa;
border-radius:50px;
text-align:center;
margin:10px;
box-shadow:1px 4px 2px 2px #ff0000;
line-height:110px;

}
a i{
    transition:all 0.3s linear;
}
a:hover i{
    transform:scale(1.4);
}
.fa-instagram{
    color:#e84393;
}
.fa-linkedin{
    color:#e84118;
}.fa-whatsapp{
    color:#0097e6;
}


</style>