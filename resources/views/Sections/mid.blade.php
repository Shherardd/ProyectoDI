<div class="container ">
    <div class="row" style="padding-bottom:0px;">
    <div class="col-8">
        <div class="banner">
              Entradas

            
        </div>
            <div class="test"></div>
            

        

    </div>
    <div class="col-4">           
        <div class="Nave">Menu</div>
        @include('Sections.contenido')
    </div>
</div>
</div>

<style>
.Nave {
    background-color: #aaaaaa;
    text-align: center;
    border: 0px;
    border-bottom: 3px;
    border-top-right-radius: 100px;
    border-bottom-right-radius: 100px;
    border-bottom-color: gray;
    border-style: solid;

}

.Navegacion {
    position: absolute;
    bottom: 1px;
    width: 50%;
    padding: 0px;
    margin-left:35%;

    
}
.col-4 {
    padding: 0px;
    z-index: -1;
}
.col-8 {
color:black;
border-style:solid;
border-width: 0px 1px 0px 0px;
border-color: red;
background-color: #f1f1f1;
padding-left:0px;
padding-right:0px;
z-index: -1;

}

.banner {
background-color: #aaaaaa;
text-align: center;
border: 0px;
border-bottom: 3px;
border-top-left-radius: 100px;
border-bottom-left-radius: 100px;
border-top-right-radius: 00px;
border-bottom-color: gray;
border-style: solid;
z-index: 1;

}

.test {
    width: 100px;
    height: 1000px;

}

</style>