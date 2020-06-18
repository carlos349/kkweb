<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        .box-shadow {
  box-shadow: 0px 0px 18px -3px rgba(143, 143, 143, 0.5);
}

.card-gif:hover {
  box-shadow: 0px 0px 20px -3px rgba(143, 143, 143, 0.75);
}

.box-shadow-dark {
  box-shadow: 3px 3px 11px -3px rgba(0, 0, 0, 0.25);
}



section {
  padding-top: 2rem;
  padding-bottom: 2rem;
}

h6 {
  color: #990000;
}

.font-weight-bolder {
  font-weight: 900;
}

.display-1, .display-2, .display-3, .display-4 {
  font-weight: 900;
}

.heading-big {
  font-weight: 800;
  text-transform: uppercase;
  color: red;
  margin: 0;
  padding: .15rem 0;
  line-height: 1.2;
  font-size: 2rem;
  -webkit-transition: color .5s ease-in, border-color .5s ease-in-out;
  transition: color .5s ease-in, border-color .5s ease-in-out;
}
.heading-big-square {
  padding: 1rem 1rem;
  border: 10px solid red;
  margin: .5rem auto 1rem auto;
}
.heading-big:hover {
  color: #ff9900;
  border-color: #ff9900;
}

.card-gif {
  
  -webkit-transition: .5s ease;
  transition: .5s ease;
  border-radius: 0;
  -webkit-transform: perspective(3em) rotateX(0deg) rotateY(-1.175deg) rotateZ(-1deg);
          transform: perspective(3em) rotateX(0deg) rotateY(-1.175deg) rotateZ(-1deg);
}
.card-header {
  border-radius: 0;
}
.card-footer {
  padding-top: 1rem;
  padding-bottom: 1rem;
}
.card-header, .card-footer {
  -webkit-transition: .5s ease;
  transition: .5s ease;
}
.card-gif:hover {
  border-color: #98d7b8;
  -webkit-transform: perspective(0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
          transform: perspective(0em) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
}
.card-gif:hover .card-header, .card-gif:hover .card-footer {
  color: #ba8b00;
  border-color: #98d7b8;
  background-color: #98d7b8;
}
.card-gif:hover .promotion-promo {
  -webkit-transform: scale(1.175) translateY(2.5px);
          transform: scale(1.175) translateY(2.5px);
  -webkit-transform-origin: left center;
          transform-origin: left center;
}
.card-gif:hover .promotion-price {
  -webkit-transform: translate(2.5px, 17.5px) scale(1.15);
          transform: translate(2.5px, 17.5px) scale(1.15);
  -webkit-transform-origin: center right;
          transform-origin: center right;
}
.card-body {
  position: relative;
  z-index: 0;
  overflow: hidden;
  padding-top: 2rem;
  padding-bottom: 2rem;
}
.card-gif .btn {
  font-weight: bold;
  text-transform: uppercase;
}

.promotion-promo {
  font-weight: 700;
  font-size: 1.15rem;
  color: red;
  font-family: "Montserrat", sans-serif;
  text-decoration: line-through;
  -webkit-transition: .25s linear;
  transition: .25s linear;
}
.promotion-price {
  position: absolute;
  bottom: 0;
  right: 0;
  background: #98d7b8;
  width: 92px;
  height: 92px;
  padding-bottom: 0rem;
  padding-top: 1.25rem;
  text-align: center;
  font-weight: 700;
  font-family: "Montserrat", sans-serif;
  font-size: 1.1rem;
  border-radius: 5rem;
  color: black;
  z-index: -1;
  -webkit-transform: translate(5px, 27.5px) rotate(-9deg);
          transform: translate(5px, 27.5px) rotate(-9deg);
  border: 1px dashed #fff;
  -webkit-transition: .25s linear;
  transition: .25s linear;
  line-height: 1.15;
}
.promotion-price-desc {
  padding: 0;
  margin: 0 auto;
  text-transform: uppercase;
  font-size: .9rem;
  display: block;
}
.promotion-price-text {
  padding: 0;
  margin: 0 auto;
  font-weight: 900;
}

.card-animate {
  counter-reset: section;
}
.card-animate .card-body:before {
  -webkit-transition: .5s ease;
  transition: .5s ease;
  counter-increment: section;
  content: "" counter(section) "";
  display: block;
  font-size: 15rem;
  font-weight: 900;
  position: absolute;
  bottom: 5rem;
  line-height: 0;
  left: -.85rem;
  padding: 0;
  margin: 0;
  color: rgba(0, 0, 0, 0.1);
  z-index: 0;
}
.card-animate .card-gif:hover .card-body:before {
  -webkit-transform: translate(10px, -10px);
          transform: translate(10px, -10px);
}
.card-animate .card-text {
  font-size: 1.5em !important;
  text-align: center;
  margin-top: 2rem;
  margin-bottom: 2rem;
}
.card-animate .card-title {
  color: black !important;
  font-weight: 900;
  text-transform: uppercase;
}

    </style>
</head>
<body>
    <section>
        <!-- heading -->
        <div class="container">
            <div class="row">			
                <div class="mx-auto">
                    <div class="col-lg-12">				
                        									
                    </div>
                </div>
            </div>
        </div>
        
        <!-- cards -->
        <div class="container">
            <div class="row">			
                <div class="mx-auto">
                    <div class="col-lg-12">
                        <div class="text-center my-3">
                            						
                            <div class="card-deck no-gutters">
    
                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card-gif card h-100 mb-4">                    
                                        <div class="card-header">                                
                                            <h5 class="card-title m-0 p-0 font-weight-bolder">Gift Card</h5>
                                        </div>
                                        <div class="card-body ">
                                            <p style="font-size: 1.5em;" class="card-text">Manicure y pedicure tradicional </p>
                                            
                                          </div>
                                          <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 15.000</p>
                                        <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card-gif card h-100 mb-4">                    
                                        <div class="card-header">                                
                                            <h5 class="card-title m-0 p-0 font-weight-bolder ">Gift Card</h5>
                                        </div>
                                        <div class="card-body ">
                                            <p style="font-size: 1.5em;" class="card-text">Manicure permanente </p>
                                            
                                            
                                        </div>
                                        <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 12.000</p>
                                        <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4">
                                    <div class="card-gif card h-100 mb-4">                    
                                        <div class="card-header">                                
                                            <h5 class="card-title m-0 p-0 font-weight-bolder ">Gift Card</h5>
                                        </div>
                                        <div class="card-body ">
                                            <p style="font-size: 1.5em;" class="card-text">Manicure y pedicure permanente </p>
                                            
                                           
                                        </div>
                                        <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 27.000</p>
                                        <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-md-4 mt-5">
                                    <div class="card-gif card h-100 mb-4">                    
                                        <div class="card-header">                                
                                            <h5 class="card-title m-0 p-0 font-weight-bolder ">Gift Card</h5>
                                        </div>
                                        <div class="card-body ">
                                            <p style="font-size: 1.5em;" class="card-text">Manicure permanente y ondulación de pestañas </p>
                                            
                                            
                                        </div>
                                        <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 26.500</p>
                                        <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                    </div>
                                </div>
                                
                                    <div class="col-12 col-sm-6 col-md-4 mt-5">
                                        <div class="card-gif card h-100 mb-4">                    
                                            <div class="card-header">                                
                                                <h5 class="card-title m-0 p-0 font-weight-bolder ">Gift Card</h5>
                                            </div>
                                            <div class="card-body ">
                                                <p style="font-size: 1.5em;" class="card-text">Ondulación con tinte </p>
                                                
                                                
                                            </div>
                                            <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 15.000</p>
                                            <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                        </div>
                                    </div>
    
                                    <div class="col-12 col-sm-6 col-md-4 mt-5">
                                        <div class="card-gif card h-100 mb-4">                    
                                            <div class="card-header">                                
                                                <h5 class="card-title m-0 p-0 font-weight-bolder ">Gift Card</h5>
                                            </div>
                                            <div class="card-body ">
                                                <p style="font-size: 1.5em;" class="card-text">Ondulación sin tinte </p>
                                                
                                                
                                            </div>
                                            <p style="text-align: right;padding-right:30px;padding-bottom: 30px;font-size: 1.3em;font-weight: 700;">$ 13.000</p>
                                            <div class="card-footer"><a style="background-color: #605b56;color:white;font-size: 1em;" href="#" class="btn btn-warning">Regalar</a></div>
                                        </div>
                                    </div>

                                

                                
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
        <!-- cards::before -->
        
    </section>
</body>
</html>