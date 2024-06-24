@extends('layouts.user')
@section('title', 'Kunnec to You Profile')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/kun_pro.css') }}" rel="stylesheet"></link>
<style>
  
#playlist,audio{width:100%;}

    .cardMateri {
    background-color: #F1F6E3;
    border-radius: 8px;
    -webkit-box-shadow: 4px 4px 8px 0px rgba(0,0,0,0.21);
    -moz-box-shadow: 4px 4px 8px 0px rgba(0,0,0,0.21);
    box-shadow: 4px 4px 8px 0px rgba(0,0,0,0.21);
}

#accordion .panel{
    border: none;
    border-radius: 3px;
    box-shadow: none;
}

#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 3px;
}

#accordion .panel-title a {
    display: block;
    padding: 12px 15px;
    background: #fff;
    font-weight: 400;
    color: #16AB50;
    text-decoration: none;
    box-shadow: 0 0 10px rgba(0,0,0,.05);
    position: relative;
    transition: all 0.5s ease 0s;
}

#accordion .panel-title a.collapsed{
    box-shadow: none;
    color: #676767;
    text-decoration: none;
    box-shadow: 0 1px 2px rgba(43,59,93,0.30);
}

#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before{
    content: "\f067";
    font-family: "Font Awesome 5 Free";
    width: 25px;
    height: 25px;
    line-height: 28px;
    font-weight: 900;
    color: #16AB50;
    text-align: center;
    position: absolute;
    top: 8px;
    right: 15px;
    transform: rotate(135deg);
    transition: all 0.3s ease 0s;
}

#accordion .panel-title a.collapsed:before{
    color: #676767;
    transform: rotate(0);
}

#accordion .panel-title a:after{
    content: "";
    width: 1px;
    height: 100%;
    background: #ececec;
    position: absolute;
    top: 0;
    right: 55px;
}

#accordion .panel-body{
    border: none;
    font-size: 15px;
    color: #615f5f;
    background-color: #fff;
    line-height: 27px;
}

#accordion .panel-body .isiMateri {
    padding: 25px;
    margin-bottom: 10px;
}

/*dekstop*/
@media screen and (min-width: 1024px) {
    .paddingLuar, .cardMateri {
        padding: 3rem;
    }
    .judulUtama {
        font-size: 32px;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1.5rem;
    }
    .isiMateri p:nth-child(1) {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 1rem;
        text-align: center;
    }
    .isiMateri p:nth-child(2) {
        font-size: 15px;
        text-align: justify;
    }
    #accordion .panel-title a {
        font-size: 19px;
    }
    #accordion .panel-title a:before,
    #accordion .panel-title a.collapsed:before {
        font-size: 16px;
    }
}

/*tablet*/
@media screen and (min-width: 768px) and (max-width: 1023px) {
    .paddingLuar, .cardMateri {
        padding: 2rem;
    }
    .judulUtama {
        font-size: 25px;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1rem;
    }
    .isiMateri p:nth-child(1) {
        font-size: 21px;
        font-weight: 700;
        margin-bottom: 0.75rem;
        text-align: center;
    }
    .isiMateri p:nth-child(2) {
        font-size: 14px;
        text-align: justify;
    }
    #accordion .panel-title a {
        font-size: 16px;
    }
    #accordion .panel-title a:before,
    #accordion .panel-title a.collapsed:before {
        font-size: 13px;
    }
}

/*HP*/ 
@media screen and (max-width: 767px){
    .paddingLuar, .cardMateri {
        padding: 1rem;
    }
    .judulUtama {
        font-size: 20px;
        font-weight: 500;
        text-align: center;
        margin-bottom: 1rem;
    }
    .isiMateri p:nth-child(1) {
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 0.5rem;
        text-align: center;
    }
    .isiMateri p:nth-child(2) {
        font-size: 12px;
        text-align: justify;
    }
    #accordion .panel-title a {
        font-size: 13px;
    }
    #accordion .panel-title a:before,
    #accordion .panel-title a.collapsed:before {
        font-size: 11px;
    }
}
</style>


<style class="cp-pen-styles">*,
*::before,
*::after {
  box-sizing: border-box;
}

img {
  display: block;
}

.gallery {
  position: relative;
  z-index: 2;
  padding: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-flow: row wrap;
      flex-flow: row wrap;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-transition: all .5s ease-in-out;
  transition: all .5s ease-in-out;
}
.gallery.pop {
  -webkit-filter: blur(10px);
          filter: blur(10px);
}
.gallery figure {
  -ms-flex-preferred-size: 33.333%;
      flex-basis: 33.333%;
  padding: 10px;
  overflow: hidden;
  border-radius: 10px;
  cursor: pointer;
}
.gallery figure img {
  width: 100%;
  border-radius: 10px;
  -webkit-transition: all .3s ease-in-out;
  transition: all .3s ease-in-out;
}
.gallery figure figcaption {
  display: none;
}

.popup {
  position: fixed;
  z-index: 2;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.75);
  opacity: 0;
  -webkit-transition: opacity .5s ease-in-out .2s;
  transition: opacity .5s ease-in-out .2s;
}
.popup.pop {
  opacity: 1;
  -webkit-transition: opacity .2s ease-in-out 0s;
  transition: opacity .2s ease-in-out 0s;
}
.popup.pop figure {
  margin-top: 0;
  opacity: 1;
}
.popup figure {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  -webkit-transform-origin: 0 0;
          transform-origin: 0 0;
  margin-top: 30px;
  opacity: 0;
  -webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;
}
.popup figure img {
  position: relative;
  z-index: 2;
  border-radius: 15px;
  box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2), 0 6px 30px rgba(0, 0, 0, 0.4);
}
.popup figure figcaption {
  position: absolute;
  bottom: 50px;
  background: -webkit-linear-gradient(top, transparent, rgba(0, 0, 0, 0.78));
  background: linear-gradient(180deg, transparent, rgba(0, 0, 0, 0.78));
  z-index: 2;
  width: 100%;
  border-radius: 0 0 15px 15px;
  padding: 100px 20px 20px 20px;
  color: #fff;
  font-family: 'Open Sans', sans-serif;
  font-size: 32px;
}
.popup figure figcaption small {
  font-size: 11px;
  display: block;
  text-transform: uppercase;
  margin-top: 12px;
  text-indent: 3px;
  opacity: .7;
  letter-spacing: 1px;
}
.popup figure .shadow {
  position: relative;
  z-index: 1;
  top: -15px;
  margin: 0 auto;
  background-position: center bottom;
  background-repeat: no-repeat;
  width: 98%;
  height: 50px;
  opacity: .6;
  -webkit-filter: blur(15px) contrast(2);
          filter: blur(15px) contrast(2);
}
.popup .close {
  position: absolute;
  z-index: 3;
  top: 10px;
  right: 10px;
  width: 25px;
  height: 25px;
  cursor: pointer;
  background: url(#close);
  border-radius: 25px;
  background: rgba(0, 0, 0, 0.1);
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}
.popup .close svg {
  width: 100%;
  height: 100%;
}

@-webkit-keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}

@keyframes poppy {
  0% {
    -webkit-transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform: matrix3d(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
  }
  3.4% {
    -webkit-transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
            transform: matrix3d(0.316, 0, 0, 0, 0, 0.407, 0, 0, 0, 0, 1, 0, -94.672, -91.573, 0, 1);
  }
  4.3% {
    -webkit-transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
            transform: matrix3d(0.408, 0, 0, 0, 0, 0.54, 0, 0, 0, 0, 1, 0, -122.527, -121.509, 0, 1);
  }
  4.7% {
    -webkit-transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
            transform: matrix3d(0.45, 0, 0, 0, 0, 0.599, 0, 0, 0, 0, 1, 0, -134.908, -134.843, 0, 1);
  }
  6.81% {
    -webkit-transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
            transform: matrix3d(0.659, 0, 0, 0, 0, 0.893, 0, 0, 0, 0, 1, 0, -197.77, -200.879, 0, 1);
  }
  8.61% {
    -webkit-transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
            transform: matrix3d(0.82, 0, 0, 0, 0, 1.097, 0, 0, 0, 0, 1, 0, -245.972, -246.757, 0, 1);
  }
  9.41% {
    -webkit-transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
            transform: matrix3d(0.883, 0, 0, 0, 0, 1.168, 0, 0, 0, 0, 1, 0, -265.038, -262.804, 0, 1);
  }
  10.21% {
    -webkit-transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
            transform: matrix3d(0.942, 0, 0, 0, 0, 1.226, 0, 0, 0, 0, 1, 0, -282.462, -275.93, 0, 1);
  }
  12.91% {
    -webkit-transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
            transform: matrix3d(1.094, 0, 0, 0, 0, 1.328, 0, 0, 0, 0, 1, 0, -328.332, -298.813, 0, 1);
  }
  13.61% {
    -webkit-transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
            transform: matrix3d(1.123, 0, 0, 0, 0, 1.332, 0, 0, 0, 0, 1, 0, -336.934, -299.783, 0, 1);
  }
  14.11% {
    -webkit-transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
            transform: matrix3d(1.141, 0, 0, 0, 0, 1.331, 0, 0, 0, 0, 1, 0, -342.273, -299.395, 0, 1);
  }
  17.22% {
    -webkit-transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
            transform: matrix3d(1.205, 0, 0, 0, 0, 1.252, 0, 0, 0, 0, 1, 0, -361.606, -281.592, 0, 1);
  }
  17.52% {
    -webkit-transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
            transform: matrix3d(1.208, 0, 0, 0, 0, 1.239, 0, 0, 0, 0, 1, 0, -362.348, -278.88, 0, 1);
  }
  18.72% {
    -webkit-transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
            transform: matrix3d(1.212, 0, 0, 0, 0, 1.187, 0, 0, 0, 0, 1, 0, -363.633, -267.15, 0, 1);
  }
  21.32% {
    -webkit-transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
            transform: matrix3d(1.196, 0, 0, 0, 0, 1.069, 0, 0, 0, 0, 1, 0, -358.864, -240.617, 0, 1);
  }
  24.32% {
    -webkit-transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
            transform: matrix3d(1.151, 0, 0, 0, 0, 0.96, 0, 0, 0, 0, 1, 0, -345.164, -216.073, 0, 1);
  }
  25.23% {
    -webkit-transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
            transform: matrix3d(1.134, 0, 0, 0, 0, 0.938, 0, 0, 0, 0, 1, 0, -340.193, -210.948, 0, 1);
  }
  28.33% {
    -webkit-transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
            transform: matrix3d(1.075, 0, 0, 0, 0, 0.898, 0, 0, 0, 0, 1, 0, -322.647, -202.048, 0, 1);
  }
  29.03% {
    -webkit-transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
            transform: matrix3d(1.063, 0, 0, 0, 0, 0.897, 0, 0, 0, 0, 1, 0, -318.884, -201.771, 0, 1);
  }
  29.93% {
    -webkit-transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
            transform: matrix3d(1.048, 0, 0, 0, 0, 0.899, 0, 0, 0, 0, 1, 0, -314.277, -202.202, 0, 1);
  }
  35.54% {
    -webkit-transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
            transform: matrix3d(0.979, 0, 0, 0, 0, 0.962, 0, 0, 0, 0, 1, 0, -293.828, -216.499, 0, 1);
  }
  36.74% {
    -webkit-transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
            transform: matrix3d(0.972, 0, 0, 0, 0, 0.979, 0, 0, 0, 0, 1, 0, -291.489, -220.242, 0, 1);
  }
  39.44% {
    -webkit-transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
            transform: matrix3d(0.962, 0, 0, 0, 0, 1.01, 0, 0, 0, 0, 1, 0, -288.62, -227.228, 0, 1);
  }
  41.04% {
    -webkit-transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
            transform: matrix3d(0.961, 0, 0, 0, 0, 1.022, 0, 0, 0, 0, 1, 0, -288.247, -229.999, 0, 1);
  }
  44.44% {
    -webkit-transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
            transform: matrix3d(0.966, 0, 0, 0, 0, 1.032, 0, 0, 0, 0, 1, 0, -289.763, -232.215, 0, 1);
  }
  52.15% {
    -webkit-transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
            transform: matrix3d(0.991, 0, 0, 0, 0, 1.006, 0, 0, 0, 0, 1, 0, -297.363, -226.449, 0, 1);
  }
  59.86% {
    -webkit-transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
            transform: matrix3d(1.006, 0, 0, 0, 0, 0.99, 0, 0, 0, 0, 1, 0, -301.813, -222.759, 0, 1);
  }
  61.66% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.991, 0, 0, 0, 0, 1, 0, -302.102, -222.926, 0, 1);
  }
  63.26% {
    -webkit-transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
            transform: matrix3d(1.007, 0, 0, 0, 0, 0.992, 0, 0, 0, 0, 1, 0, -302.171, -223.276, 0, 1);
  }
  75.28% {
    -webkit-transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
            transform: matrix3d(1.001, 0, 0, 0, 0, 1.003, 0, 0, 0, 0, 1, 0, -300.341, -225.696, 0, 1);
  }
  83.98% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.61, -225.049, 0, 1);
  }
  85.49% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -299.599, -224.94, 0, 1);
  }
  90.69% {
    -webkit-transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
            transform: matrix3d(0.999, 0, 0, 0, 0, 0.999, 0, 0, 0, 0, 1, 0, -299.705, -224.784, 0, 1);
  }
  100% {
    -webkit-transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
            transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, -300, -225, 0, 1);
  }
}
</style>
@endsection
@section('content')

<div class="card">
    <div class="card-header1">
        <div class="row">
            <div class="col-sm mt-2">
                <p>
                    <a href="{{ url('k_you/k2u') }}" style="color: #FFFFFF"><img src="{{ asset('public/images/K_Logo6.png') }}" height="40px" width="60px"/> Kunnec to You</a>
                     |&nbsp;               
                    <a href="{{ url('k_you/k2u_settings') }}" style="font-size:20px; color: #ffffff;">
                        <i class="fas fa-tools" data-toggle="tooltip" data-placement="bottom" title="Settings" style="color: #FFFFFF;"></i> 
                    </a>&nbsp;   
                </p>
            </div>
  
            <div class="col-sm d-flex flex-row-reverse">
                <p>
                    <button class="btn btn-falcon-default mt-2 ml-auto" type="button" data-toggle="collapse" data-target="#collapseSort1" aria-expanded="false" aria-controls="collapseExample"><span class="fa fa-sliders-h text-success"></span>
                    </button>
                </p>
            </div>
        </div>
        <div class="collapse" id="collapseSort1">
            <div class="row p-3">
                <div class="col">
                    <form class="form-inline">
                        <div class="md-form my-0">
                            <input class="form-control" type="text" placeholder="Search Skilled Kunnec's" aria-label="Search">
                        </div>
                        <div class="ml-2">
                            <button href="#!" class="btn btn-outline-light btn-md my-0 ml-sm-2" type="submit">Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
	
	        <div class=" col pb-4">
                <div class="border p-card rounded">
                    <div class="media">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm">
                                <div class="form-group">
			                            <select class="custom-select" id="card-holder-category" name="customSelectCategory" required="required">
					                        <option value="" disabled selected>Select Category ...</option>
                                            <option>Accounting</option>
                                            <option>Accountant</option>
                                            <option>Account Collector</option>
                                            <option>Account Executive</option>
                                            <option>Account Manager</option>
                                            <option>Accounts Payable/Receivable Clerk</option>
                                            <option>Account Representative</option>
                                            <option>Accounting Analyst</option>
                                            <option>Accounting Director</option>
                                            <option>Accounting Staff</option>
                                            <option>Actor</option>
                                            <option>Actress</option>
                                            <option>Actuary</option>
                                            <option>Entrepreneur</option>
                                            <option>Addiction Counselor</option>
                                            <option>Administrative Analyst</option>
                                            <option>Administrative Assistant</option>
                                            <option>Administrative Manager</option>
                                            <option>Administrative Specialist</option>
                                            <option>Administrator</option>
                                            <option>Animal Breeder</option>
                                            <option>Animal Control Officer</option>
                                            <option>Animal Shelter Board Member</option>
                                            <option>Animal Shelter Manager</option>
                                            <option>Animal Shelter Worker</option>
                                            <option>Animal Trainer</option>
                                            <option>Animal Shelter Volunteer</option>
                                            <option>Application Developer</option>
                                            <option>Architect</option>
                                            <option>Archivist</option>
                                            <option>Area Sales Manager</option>
                                            <option>Artificial Intelligence Engineer</option>
                                            <option>Artist</option>
                                            <option>Assistant Engineer</option>
                                            <option>Assistant Golf Professional</option>
                                            <option>Assistant Manager</option>
                                            <option>Assistant Professor</option>
                                            <option>Astronomer</option>
                                            <option>Atmospheric Scientist</option>
                                            <option>Attorney</option>
                                            <option>Auditor</option>
                                            <option>Auditing Clerk</option>
                                            <option>B2B Sales Specialist</option>
                                            <option>Bank Teller</option>
                                            <option>Barber</option>
                                            <option>Barista</option>
                                            <option>Beautician</option>
                                            <option>Bellhop</option>
                                            <option>Benefits Manager</option>
                                            <option>Biologist</option>
                                            <option>Biological Engineer</option>
                                            <option>Biostatistician</option>
                                            <option>Board of Director</option>
                                            <option>Boilermaker</option>
                                            <option>Bookkeeper</option>
                                            <option>Branch Manager</option>
                                            <option>Brand Manager</option>
                                            <option>Budget Analyst</option>
                                            <option>Building Inspector</option>
                                            <option>Bus Driver</option>
                                            <option>Business Analyst</option>
                                            <option>Business Manager</option>
                                            <option>Cab Driver</option>
                                            <option>Cafeteria Worker</option>
                                            <option>Call Center Representative</option>
                                            <option>Camera Operator</option>
                                            <option>Car Dealer</option>
                                            <option>Caregiver</option>
                                            <option>Caretaker or House Sitter</option>
                                            <option>Carpenter</option>
                                            <option>Cashier</option>
                                            <option>Casino Host</option>
                                            <option>CEO</option>
                                            <option>Chain Executive</option>
                                            <option>Chemist</option>
                                            <option>Chemical Engineer</option>
                                            <option>Chef</option>
                                            <option>Chief</option>
                                            <option>Chief Engineer</option>
                                            <option>Chief Executive Officer</option>
                                            <option>Chief Information Officer (CIO)</option>
                                            <option>Chief People Officer</option>
                                            <option>Chief Robot Whisperer</option>
                                            <option>Chief Technology Officer (CTO)</option>
                                            <option>Choreographer</option>
                                            <option>Church Volunteer</option>
                                            <option>Civil Engineer</option>
                                            <option>C-Level or C-Suite.</option>
                                            <option>Client Service Specialist</option>
                                            <option>Cloud Architect</option>
                                            <option>CNA</option>
                                            <option>Commercial Loan Officer</option>
                                            <option>Communications Director</option>
                                            <option>Community Food Project Worker</option>
                                            <option>Community Volunteer Jobs</option>
                                            <option>Computer Animator</option>
                                            <option>Computer Programmer</option>
                                            <option>Computer Scientist</option>
                                            <option>Concierge</option>
                                            <option>Conservation Scientist</option>
                                            <option>Conservation Volunteer</option>
                                            <option>Construction Worker</option>
                                            <option>Content Creator</option>
                                            <option>Content Marketing Manager</option>
                                            <option>Content Strategist</option>
                                            <option>Continuous Improvement Consultant</option>
                                            <option>Continuous Improvement Lead</option>
                                            <option>Controller</option>
                                            <option>Coordinator</option>
                                            <option>Copywriter</option>
                                            <option>Copy Editor</option>
                                            <option>Cosmetologist</option>
                                            <option>Counselor</option>
                                            <option>Couples Counselor</option>
                                            <option>Courier</option>
                                            <option>Crane Operator</option>
                                            <option>Credit Authorizer</option>
                                            <option>Credit Counselor</option>
                                            <option>Cruise Director</option>
                                            <option>Cruise Ship Attendant</option>
                                            <option>Culture Operations Manager</option>
                                            <option>Customer Care Associate</option>
                                            <option>Customer Service</option>
                                            <option>Customer Service Manager</option>
                                            <option>Customer Support</option>
                                            <option>Data Analyst</option>
                                            <option>Data Entry </option>
                                            <option>Delivery Driver</option>
                                            <option>Dental Hygienist</option>
                                            <option>Dentist</option>
                                            <option>DevOps Engineer</option>
                                            <option>Digital Marketing Manager</option>
                                            <option>Direct Salesperson</option>
                                            <option>Director</option>
                                            <option>Director of Ethical Hacking</option>
                                            <option>Director of First Impressions</option>
                                            <option>Director of Inside Sales</option>
                                            <option>Director of Maintenance</option>
                                            <option>Director of Photography</option>
                                            <option>Dispatcher for Trucks or Taxis</option>
                                            <option>Divorce Attorney</option>
                                            <option>Divorce Lawyer</option>
                                            <option>Doctor</option>
                                            <option>Dog Walker / Pet Sitter</option>
                                            <option>Drafter</option>
                                            <option>eCommerce Marketing Specialist</option>
                                            <option>Economist</option>
                                            <option>Editor/Proofreader</option>
                                            <option>Electrical Engineer</option>
                                            <option>Electrician</option>
                                            <option>Emergency Relief Worker</option>
                                            <option>Engineering Technician</option>
                                            <option>Entertainment Specialist</option>
                                            <option>Event Planner</option>
                                            <option>Events Manager</option>
                                            <option>Executive</option>
                                            <option>Executive Assistant</option>
                                            <option>Farm Worker</option>
                                            <option>Fast Food Worker</option>
                                            <option>File Clerk</option>
                                            <option>Film Critic</option>
                                            <option>Finance Director</option>
                                            <option>Finance Manager</option>
                                            <option>Financial Analyst</option>
                                            <option>Financial Planner</option>
                                            <option>Financial Services Representative</option>
                                            <option>Flight Attendant</option>
                                            <option>Foreman</option>
                                            <option>Food Kitchen Worker</option>
                                            <option>Founder</option>
                                            <option>Front Desk Associate</option>
                                            <option>Front Desk Manager</option>
                                            <option>Front-Line Employees</option>
                                            <option>Funeral Attendant</option>
                                            <option>Geological Engineer</option>
                                            <option>Geologist</option>
                                            <option>Ghostwriter</option>
                                            <option>Grant Writer</option>
                                            <option>Graphic Designer</option>
                                            <option>Group Sales</option>
                                            <option>Guidance Counselor</option>
                                            <option>Habitat for Humanity Builder</option>
                                            <option>Handyman</option>
                                            <option>Head</option>
                                            <option>Heavy Equipment Operator</option>
                                            <option>Help Desk</option>
                                            <option>Help Desk Worker/Desktop Support</option>
                                            <option>Homeless Shelter Worker</option>
                                            <option>Hospital Volunteer</option>
                                            <option>Hotel Front Door Greeter</option>
                                            <option>Hotel Manager</option>
                                            <option>Hotel Receptionist</option>
                                            <option>Housekeeper</option>
                                            <option>Human Resources</option>
                                            <option>HVAC Technician</option>
                                            <option>Image Consultant</option>
                                            <option>Information Security Analyst</option>
                                            <option>Investor</option>
                                            <option>Interior Designer</option>
                                            <option>Interpreter</option>
                                            <option>Iron Worker</option>
                                            <option>IT Manager</option>
                                            <option>IT Professional</option>
                                            <option>Journalist</option>
                                            <option>Landscaping Assistant</option>
                                            <option>Landscaping Worker</option>
                                            <option>Lawyer</option>
                                            <option>Lead</option>
                                            <option>Library Assistant</option>
                                            <option>Life Coach</option>
                                            <option>Line Cook</option>
                                            <option>Locksmith</option>
                                            <option>Lodging Manager</option>
                                            <option>Machinery Operator</option>
                                            <option>Mail Carrier</option>
                                            <option>Maintenance Engineer</option>
                                            <option>Makeup Artist</option>
                                            <option>Manager</option>
                                            <option>Management Consultant</option>
                                            <option>Managing Member</option>
                                            <option>Managing Partner</option>
                                            <option>Manicurist</option>
                                            <option>Manufacturing Assembler</option>
                                            <option>Market Development Manager</option>
                                            <option>Market Researcher</option>
                                            <option>Marketing Communications Manager</option>
                                            <option>Marketing Consultant</option>
                                            <option>Marketing Director</option>
                                            <option>Marketing Manager</option>
                                            <option>Marketing Research Analyst</option>
                                            <option>Marketing Specialist</option>
                                            <option>Marketing Staff</option>
                                            <option>Massage Therapy</option>
                                            <option>Mathematician</option>
                                            <option>Meals on Wheels Driver</option>
                                            <option>Mechanic</option>
                                            <option>Mechanical Engineer</option>
                                            <option>Meeting Planner</option>
                                            <option>Media Buyer</option>
                                            <option>Media Relations Coordinator</option>
                                            <option>Medical Administrator</option>
                                            <option>Medical Laboratory Tech</option>
                                            <option>Medical Researcher</option>
                                            <option>Medical Transcriptionist</option>
                                            <option>Mental Health Counselor</option>
                                            <option>Mentor</option>
                                            <option>Merchandising Associate</option>
                                            </option>
                                            <option>Mining Engineer</option>
                                            <option>Music Engineer</option>
                                            <option>Music Producer</option>
                                            <option>Molecular Scientist</option>
                                            <option>Mortgage Loan Processor</option>
                                            <option>Motion Picture Director</option>
                                            <option>Mover</option>
                                            <option>Musician</option>
                                            <option>Nail Technician</option>
                                            <option>Network Administrator</option>
                                            <option>Novelist/Writer</option>
                                            <option>Nuclear Engineer</option>
                                            <option>Nurse</option>
                                            <option>Officer</option>
                                            <option>Office Assistant</option>
                                            <option>Office Clerk</option>
                                            <option>Office Manager</option>
                                            <option>Office Volunteer</option>
                                            <option>Online ESL Instructor</option>
                                            <option>Operations Analyst</option>
                                            <option>Operations Assistant</option>
                                            <option>Operations Coordinator</option>
                                            <option>Operations Director</option>
                                            <option>Operations Manager</option>
                                            <option>Operations Professional</option>
                                            <option>Orderly</option>
                                            <option>Organizer</option>
                                            <option>Outside Sales Manager</option>
                                            <option>Overseer</option>
                                            <option>Owner</option>
                                            <option>Painter</option>
                                            <option>Paralegal</option>
                                            <option>Parking Attendant</option>
                                            <option>Payroll Clerk</option>
                                            <option>Payroll Manager</option>
                                            <option>Personal Assistant</option>
                                            <option>Personal Trainer</option>
                                            <option>Petroleum Engineer</option>
                                            <option>Pharmacist</option>
                                            <option>Pharmacy Assistant</option>
                                            <option>Phlebotomist</option>
                                            <option>Phone Sales Specialist</option>
                                            <option>Phone Survey Conductor</option>
                                            <option>Photographer</option>
                                            <option>Physical Therapist</option>
                                            <option>Physical Therapy Assistant</option>
                                            <option>Physical Trainer</option>
                                            <option>Proposal Writer</option>
                                            <option>Physicist</option>
                                            <option>Pipefitter</option>
                                            <option>Plant Engineer</option>
                                            <option>Playwright</option>
                                            <option>Plumber</option>
                                            <option>Porter</option>
                                            <option>Police Officer</option>
                                            <option>Political Scientist</option>
                                            <option>Preschool Teacher</option>
                                            <option>President</option>
                                            <option>Principal</option>
                                            <option>Producer</option>
                                            <option>Product Manager</option>
                                            <option>Production Engineer</option>
                                            <option>Professor</option>
                                            <option>Program Administrator</option>
                                            <option>Program Manager</option>
                                            <option>Proprietor</option>
                                            <option>Publicist</option>
                                            <option>Public Relations</option>
                                            <option>Public Relations Specialist</option>
                                            <option>Purchasing Staff</option>
                                            <option>Quality Assurance Technician</option>
                                            <option>Quality Control</option>
                                            <option>Quality Control Coordinator</option>
                                            <option>Quality Engineer</option>
                                            <option>Rapper</option>
                                            <option>Realtor</option>
                                            <option>Receptionist</option>
                                            <option>Recruiter</option>
                                            <option>Recyclables Collector</option>
                                            <option>Red Cross Volunteer</option>
                                            <option>Researcher</option>
                                            <option>Research Assistant</option>
                                            <option>Reservationist</option>
                                            <option>Restaurant Manager</option>
                                            <option>Retail Worker</option>
                                            <option>Risk Manager</option>
                                            <option>Roofer</option>
                                            <option>Safety Engineer</option>
                                            <option>Sales Engineer</option>
                                            <option>Sales Analyst</option>
                                            <option>Sales Associate</option>
                                            <option>Sales Engineer</option>
                                            <option>Sales Manager</option>
                                            <option>Sales Representative</option>
                                            <option>Salon Manager</option>
                                            <option>School Bus Driver</option>
                                            <option>School Counselor</option>
                                            <option>School Volunteer</option>
                                            <option>Screenwriter</option>
                                            <option>Scrum Master</option>
                                            <option>Secretary</option>
                                            <option>Security Guard</option>
                                            <option>SEO Manager</option>
                                            <option>Server</option>
                                            <option>Service Dog Trainer</option>
                                            <option>Shareholders</option>
                                            <option>Sheet Metal Worker</option>
                                            <option>Shelf Stocker</option>
                                            <option>Shipping and Receiving Staff</option>
                                            <option>Singer</option>
                                            <option>Skin Care Specialist</option>
                                            <option>Speechwriter</option>
                                            <option>Social Media Assistant</option>
                                            <option>Social Media Specialist</option>
                                            <option>Social Worker</option>
                                            <option>Software Engineer</option>
                                            <option>Software Ninjaneer</option>
                                            <option>Solar Photovoltaic Installer</option>
                                            <option>Sound Engineer</option>
                                            <option>Spa Manager</option>
                                            <option>Speech Pathologist</option>
                                            <option>Sports Volunteer</option>
                                            <option>SQL Developer</option>
                                            <option>Store Manager</option>
                                            <option>Strategist</option>
                                            <option>Substitute Teacher</option>
                                            <option>Suicide Hotline Volunteer</option>
                                            <option>Superintendent</option>
                                            <option>Supervisor</option>
                                            <option>Taper</option>
                                            <option>Teacher</option>
                                            <option>Teaching Assistant</option>
                                            <option>Team Leader</option>
                                            <option>Technical Specialist</option>
                                            <option>Technical Support Specialist</option>
                                            <option>Technical Writer</option>
                                            <option>Telemarketer</option>
                                            <option>Telephone Operator</option>
                                            <option>Therapist</option>
                                            <option>Title Analyst</option>
                                            <option>Title Researcher</option>
                                            <option>Tow Truck Operator</option>
                                            <option>Translator</option>
                                            <option>Travel Agent</option>
                                            <option>Travel Nurse</option>
                                            <option>Travel Writer</option>
                                            <option>Truck Driver</option>
                                            <option>Tutor/Online Tutor</option>
                                            <option>UPS Driver</option>
                                            <option>UX Designer & UI Developer</option>
                                            <option>Valet</option>
                                            <option>Veterinary Assistant</option>
                                            <option>Vehicle or Equipment Cleaner</option>
                                            <option>Vice President of Marketing</option>
                                            <option>Vice President of Operations</option>
                                            <option>Video Editor</option>
                                            <option>Video Game Writer</option>
                                            <option>Video or Film Producer</option>
                                            <option>Virtual Assistant</option>
                                            <option>Wait Staff Manager</option>
                                            <option>Waiter/Waitress</option>
                                            <option>Warehouse Worker</option>
                                            <option>Web Designer</option>
                                            <option>Web Developer</option>
                                            <option>Wedding Coordinator</option>
                                            <option>Welder</option>
                                            <option>Welding</option>
                                            <option>Well Driller</option>
                                            <option>Women’s Shelter Jobs</option>
                                            <option>Yoga Instructor</option>
                                            <option>Youth Volunteer</option>
                                            <option>Zoologist</option>
                                            <option>Admin</option>
                                            <option>Art</option>
                                            <option>Architecture</option>
                                            <option>Beverage</option>
                                            <option>Business</option>
                                            <option>Customer</option>
                                            <option>Design</option>
                                            <option>Education</option>
                                            <option>Engineering</option>
                                            <option>Film</option>
                                            <option>Finance</option>
                                            <option>Fitness</option>
                                            <option>Food</option>
                                            <option>Government</option>
                                            <option>Health</option>
                                            <option>HR</option>
                                            <option>Hotel</option>
                                            <option>Labor</option>
                                            <option>Legal</option>
                                            <option>Manufacturing</option>
                                            <option>Marketing</option>
                                            <option>Media</option>
                                            <option>Medical</option>
                                            <option>Management</option>
                                            <option>Music</option>
                                            <option>Non-Profit</option>
                                            <option>Office</option>
                                            <option>Promotions</option>
                                            <option>Programming</option>
                                            <option>Real Estate</option>
                                            <option>Retail</option>
                                            <option>Sales</option>
                                            <option>Salon | Barber</option>
                                            <option>Spas</option>
                                            <option>Sys Network</option>
                                            <option>Tech Support</option>
                                            <option>Transportation</option>
                                            <option>TV</option>
                                            <option>Video</option>
                                            <option>Web</option>
                                            <option>Writing</option>
                                            <optgroup label="Accounting" >
                                                <option>Finance Basics</option>
                                                <option>Financial Accounting</option>
                                                <option>Bookkeeping</option>
                                                <option>Risk Assessment</option>
                                                <option>Auditing</option>
                                                <option>Taxes</option>
                                            </optgroup>
                                            <optgroup label="Apple" >
                                                <option>Mac OS</option>
                                                <option>Mac Basics</option>
                                            </optgroup>
                                            <optgroup label="Business" >
                                                <option>Advertising</option>
                                                <option>Business Plan</option>
                                                <option>Business Management</option>
                                                <option>Branding</option>
                                                <option>Contracts</option>
                                                <option>Customer Service</option>
                                                <option>Investing</option>
                                                <option>Intellectual Property</option>
                                                <option>Negotiations</option>
                                                <option>Marketing</option>
                                                <option>Patents</option>
                                                <option>Product Management</option>
                                                <option>Risk Management</option>
                                                <option>Sales</option>
                                                <option>Six Sigma</option>
                                                <option>Six Sigma Black Belt</option>
                                                <option>Six Sigma Green Belt</option>
                                                <option>Six Sigma Yellow Belt</option>
                                                <option>Start-Ups</option>
                                                <option>Trademarks</option>
                                                <option>Quality Management</option>
                                            </optgroup>
                                            <optgroup label="Crypto">
                                                <option>Bitcoin</option>
                                                <option>Blockchain</option>
                                                <option>Crytocurrency</option>
                                            </optgroup>
                                            <optgroup label="Data">
                                                <option>Access</option>
                                                <option>Data Analysis</option>
                                                <option>SQL</option>
                                                <option>MySQL</option>
                                                <option>Excel</option>
                                                <option>Word</option>
                                                <option>Python</option>
                                                <option>Css</option>
                                                <option>Bootstrap</option>
                                                <option>PHP</option>
                                                <option>Java</option>
                                                <option>JQuery</option>
                                                <option>Javascript</option>
                                                <option>Power Point</option>
                                                <option>Cyber Security</option>
                                                <option>Network Sercurity</option>
                                                <option>Linux</option>
                                                <option>SQL</option>
                                                <option>Windows</option>
                                                <option>Shell</option>
                                                <option>Javascript</option>
                                                <option>Power Point</option>
                                            </optgroup>
                                            <optgroup label="Design">
                                                <option>Photoshop</option>
                                                <option>Drawing</option>
                                                <option>Illustrator</option>
                                                <option>InDesign</option>
                                                <option>Dreamweaver</option>
                                                <option>Logo Design</option>
                                                <option>Graphic Design</option>
                                                <option>Autocad</option>
                                                <option>PHP</option>
                                                <option>JQuery</option>
                                                <option>Javascript</option>
                                                <option>Power Point</option>
                                            </optgroup>
                                            <optgroup label="Games">
                                                <option>Poker</option>
                                                <option>Chess</option>
                                                <option>Card Games</option>
                                                <option>On-Line Gaming</option>
                                                <option>Designing online Games</option>
                                            </optgroup>
                                            <optgroup label="Home Improvement">
                                                <option>Decorating</option>
                                                <option>Wiring</option>
                                                <option>Drywall</option>
                                                <option>Piping</option>
                                                <option>Gardening</option>
                                            </optgroup>
                                            <optgroup label="Lifestyle" >
                                                <option>Skin Care</option>
                                                <option>Cosmetics</option>
                                                <option>Nail Design</option>
                                                <option>Hairstyle</option>
                                                <option>Weight Lifting</option>
                                                <option>Nutrition</option>
                                                <option>Yoga</option>
                                                <option>Mental Health</option>
                                                <option>Self Defense</option>
                                                <option>Meditation</option>
                                                <option>Weight Loss</option>
                                                <option>Fasting</option>
                                                <option>Vegan Diet</option>
                                                <option>Psychics</option>
                                                <option>Tarot</option>
                                            </optgroup>
                                            <optgroup label="Language">
                                                <option>English</option>
                                                <option>Spanish</option>
                                                <option>French</option>
                                                <option>Italian</option>
                                                <option>Russian</option>
                                                <option>Hebrew</option>
                                            </optgroup>
                                            <optgroup label="Media" >
                                                <option>Journalism</option>
                                                <option>Podcast</option>
                                                <option>Screenwriting</option>
                                                <option>After Effects</option>
                                                <option>Writing Editing</option>
                                            </optgroup>
                                            <optgroup label="Music">
                                                <option>Pro Tools</option>
                                                <option>Cubase</option>
                                                <option>Logic Pro</option>
                                                <option>Albeton live</option>
                                                <option>Dreamweaver</option>
                                                <option>Gararge Band</option>
                                                <option>Presonus</option>
                                                <option>Songwriting</option>
                                                <option>Reading music</option>
                                                <option>Guitar</option>
                                                <option>Acoustic Guitar</option>
                                                <option>Guitar Chords</option>
                                                <option>Piano Chords</option>
                                                <option>Voice Training</option>
                                                <option>Singing</option>
                                                <option>Breathing techniques</option>
                                                <option>Publishing</option>
                                                <option>Mechanical Royalties</option>
                                            </optgroup>
                                            <optgroup label="Presentations" >
                                                <option>Leadership</option>
                                                <option>Public Speaking</option>
                                                <option>Presentations</option>
                                            </optgroup>
                                            <optgroup label="Real Estate" >
                                                <option>Construction</option>
                                                <option>Mortgage</option>
                                                <option>Buying a Home</option>
                                                <option>Interior Design</option>
                                                <option>Architecture</option>
                                                <option>PReal Estate Marketing</option>
                                            </optgroup>
                                            <optgroup label="Video" >
                                                <option>Video Editing</option>
                                                <option>Voice Over</option>
                                                <option>Film Making</option>
                                                <option>Cinematography</option>
                                                <option>Lighting</option>
                                                <option>Camera Movement & Placement</option>
                                            </optgroup>
                                            <optgroup label="Writing" >
                                                <option>Novels</option>
                                                <option>Storytelling</option>
                                                <option>Fiction</option>
                                                <option>Character Development</option>
                                                <option>Non-Fiction</option>
                                                <option>Writing Editing</option>
                                            </optgroup>
					                    </select>
                                    </div>
						
                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                            <option value="" disabled selected>Type of Post ...</option>
                                            <option value="Afrikanns">Personal</option>
                                            <option value="Albanian">Company</option>  
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                            <option value="" disabled selected>Select Language ...</option>
                                            <option value="Afrikanns">Afrikanns</option>
                                            <option value="Albanian">Albanian</option>
                                            <option value="Albanian">Amharic</option>
                                            <option value="Arabic">Arabic</option>
                                            <option value="Armenian">Armenian</option>
                                            <option value="Basque">Basque</option>
                                            <option value="Albanian">Belarusian</option>
                                            <option value="Bengali">Bengali</option>
                                            <option value="Albanian">Bosnian</option>
                                            <option value="Bulgarian">Bulgarian</option>
                                            <option value="Catalan">Catalan</option>
                                            <option value="Cambodian">Cambodian</option>
                                            <option value="Albanian">Cebuano</option>
                                            <option value="Albanian">Chichwea</option>
                                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                            <option value="Albanian">Corsican</option>
                                            <option value="Croation">Croation</option>
                                            <option value="Czech">Czech</option>
                                            <option value="Danish">Danish</option>
                                            <option value="Dutch">Dutch</option>
                                            <option value="English">English</option>
                                            <option value="Estonian">Estonian</option>
                                            <option value="Albanian">Filipino</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finnish">Finnish</option>
                                            <option value="French">French</option>
                                            <option value="Albanian">Gallician</option>
                                            <option value="Georgian">Georgian</option>
                                            <option value="German">German</option>
                                            <option value="Greek">Greek</option>
                                            <option value="Gujarati">Gujarati</option>
                                            <option value="Albanian">Hausa</option>
                                            <option value="Albanian">Cebuano</option>
                                            <option value="Hebrew">Hawaiian</option>
                                            <option value="Albanian">Hebrew</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="Albanian">Hmong</option>
                                            <option value="Hungarian">Hungarian</option>
                                            <option value="Icelandic">Icelandic</option>
                                            <option value="Albanian">Igbo</option>
                                            <option value="Indonesian">Indonesian</option>
                                            <option value="Irish">Irish</option>
                                            <option value="Italian">Italian</option>
                                            <option value="Japanese">Japanese</option>
                                            <option value="Javanese">Javanese</option>
                                            <option value="Albanian">Kannada</option>
                                            <option value="Albanian">Kazakh</option>
                                            <option value="Albanian">Khmer</option>
                                            <option value="Korean">Korean</option>
                                            <option value="Albanian">Kurdish</option>
                                            <option value="Albanian">Kyrgyz</option>
                                            <option value="Albanian">Lao</option>
                                            <option value="Latin">Latin</option>
                                            <option value="Latvian">Latvian</option>
                                            <option value="Lithuanian">Lithuanian</option>
                                            <option value="Albanian">Luxembourgish</option>
                                            <option value="Macedonian">Macedonian</option>
                                            <option value="Albanian">Malagasy</option>
                                            <option value="Malay">Malay</option>
                                            <option value="Malayalam">Malayalam</option>
                                            <option value="Maltese">Maltese</option>
                                            <option value="Maori">Maori</option>
                                            <option value="Marathi">Marathi</option>
                                            <option value="Mongolian">Mongolian</option>
                                            <option value="Albanian">Myammar</option>
                                            <option value="Nepali">Nepali</option>
                                            <option value="Norwegian">Norwegian</option>
                                            <option value="Albanian">Pashto</option>
                                            <option value="Persian">Persian</option>
                                            <option value="Polish">Polish</option>
                                            <option value="Portuguese">Portuguese</option>
                                            <option value="Punjabi">Punjabi</option>
                                            <option value="Quechua">Quechua</option>
                                            <option value="Romanian">Romanian</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Samoan">Samoan</option>
                                            <option value="Albanian">Scots Gaelic</option>
                                            <option value="Serbian">Serbian</option>
                                            <option value="Albanian">Sesotho</option>
                                            <option value="Albanian">Shona</option>
                                            <option value="Albanian">Sinhala</option>
                                            <option value="Slovak">Slovak</option>
                                            <option value="Slovenian">Slovenian</option>
                                            <option value="Albanian">Somali</option>
                                            <option value="Spanish">Spanish</option>
                                            <option value="Albanian">Sundanese</option>
                                            <option value="Swahili">Swahili</option>
                                            <option value="Swedish ">Swedish </option>
                                            <option value="Albanian">Tajik</option>
                                            <option value="Tamil">Tamil</option>
                                            <option value="Tatar">Tatar</option>
                                            <option value="Telugu">Telugu</option>
                                            <option value="Thai">Thai</option>
                                            <option value="Tibetan">Tibetan</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Turkish">Turkish</option>
                                            <option value="Ukranian">Ukranian</option>
                                            <option value="Urdu">Urdu</option>
                                            <option value="Uzbek">Uzbek</option>
                                            <option value="Vietnamese">Vietnamese</option>
                                            <option value="Welsh">Welsh</option>
                                            <option value="Xhosa">Xhosa</option>
                                            <option value="Albanian">Yiddish</option>
                                            <option value="Albanian">Yoruba</option>
                                            <option value="Albanian">Zulu</option>
                                        </select>
                                    </div>
                
                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-country" name="customSelectCountry" required="required">
                                            <option value="" disabled selected>Select Country ...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
				        
                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-state" name="customSelectState required="required">
                                            <option value="" disabled selected>Select State...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
						  
                                    <div class="form-group">
                                        <select class="custom-select" id="card-holder-city" name="customSelectCity" required="required">
                                            <option value="" disabled selected>Select City ...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Bouvet Island">Bouvet Island</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                                            <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="France Metropolitan">France Metropolitan</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Territories">French Southern Territories</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                                            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                            <option value="Moldova, Republic of">Moldova, Republic of</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn">Pitcairn</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russian Federation">Russian Federation</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia">Saint Lucia</option>
                                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States">United States</option>
                                            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                                            <option value="Western Sahara">Western Sahara</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Yugoslavia">Yugoslavia</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
					 
					            <div class="col-sm-2">
					                <div class="form-check-label" style="color: #F1C40F">Time</div>
					                <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">One Time </label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Full Time</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Part Time</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Remote</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Internship</label>
                                    </div>
                                    <div class="form-group form-check-inline">
                                        <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                        <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Freelance</label>
                                    </div>
						        <div>
                            </div>
						    <br>
						</div>
					 
                        <div class="col-sm-2">
                            <div class="form-check-label" style="color: #F1C40F">Payment</div>
					            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Flat Fee </label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Hourly</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Weekly</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Completion</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                    <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">No Payment</label>
                            </div>
                        </div> 

                        <div class="col-sm-2">
                            <div class="form-check-label" style="color: #F1C40F">Posted</div>
					            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">Today </label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">This Week</label>
                            </div>
                            <div class="form-group form-check-inline">
                                <input class="form-check-input" id="defaultcheckbox1" type="checkbox">
                                <label class="form-check-label" for="defaultcheckbox1" style="color: #FFFFFF">This Month</label>
                            </div>
                        </div>
					 
					    <div class="col-sm">
						    <button class="btn btn-warning mr-5 mb-1" type="button">
                                <a href="{{ url('k_you/k2u_list') }}">Filter</a>
                            </button>
				        </div>
				    </div>
			    </div>
            </div>
	    </div>
    </div>
</div>
<div class="card">
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <div class="notification-avatar">
                <div class="avatar avatar-5xl mr-3 justify-content-center">
                    <img class="img-thumbnail img-fluid rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/1.jpg')}}" alt="" />
                </div>
            </div> 
        </div>
        <div class="col-md-auto">
            <div class="row">
                <div class="col">
                    <h1 class="display-4">{{Auth::user()->username}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>
                        ATTORNEY
                    </h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>
                        <small class="text-muted">manza_the great@gmail.com</small>
                    </h5>
                    <h5>
                        <small class="text-muted">702-435-6789</small>
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <div class="float-right">
                <small class="text-muted">Rating:</small>
            </div>
        </div>
        <div class="col-md-auto">
            <div class="rate float-left">
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
            </div>
        </div>
        <div class="col col-lg-2">
            <small class="text-muted">4.0</small>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <button type="button" class="btn1 btn-kunnec" data-toggle="modal" data-target="#RTRVModal">
            Rate & Review
        </button>
        <a href="#">
            <button type="button" class="btn1 btn-danger">
                Save as Favorite
            </button>
        </a>
        <a href="{{ url('messages/message_you') }}">
            <button type="button" class="btn1 btn-primary">
            Mesaage Me
            </button>
        </a>
    </div>
    <div class="row justify-content-md-center">
        <p>Language:</p>
        <p> English</p>
        <p> Spanish</p>
        <p> French</p>
    </div>
    <hr class="style12">
    <div class="row justify-content-md-center">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="fas fa-globe"></i><small> My Website</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-facebook"></i><small> Facebook</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-youtube"></i><small> YouTube</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-patreon"></i><small> Patreon</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-instagram"></i><small> Instagram</small></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fab fa-twitter"></i><small> Twitter</small></a>
            </li>
        </ul>
    </div>
</div>
</div>


    <div class="card-body">
        <div class="tab-content">
            <div class="tab-pane fade active show" id="organize" role="tabpanel" data-filter-list="content-list-body">
                <div class="tile" id="tile-1">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true"><i class="fas fa-question-circle"></i> About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="true"><i class="fas fa-briefcase"></i> Experience</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " id="portfolio-tab" data-toggle="tab" href="#portfolio" role="tab" aria-controls="work" aria-selected="true"><i class="fas fa-id-card"></i> Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="review-tab" data-toggle="tab" href="#reviews" role="tab" aria-controls="contact" aria-selected="false"><i class="fas fa-map-signs"></i> Reviews</a>
                            </li>
                        <div class="slider"></div>
                    </ul>
                </div>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                        <div class="row content-list-head">
                            <div class="col-sm-4">
                                <div class="row">
                                    <div class="col">
                                        <div class="modal-header1 justify-content-md-center">
                                            <h5 style="color: #ffffff;">
                                                <i class="fas fa-user-graduate"></i> Education</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <p> University of Nevada-Las Vegas</p>
                                                <p style="font-size: 12px;">B.S. (2012) | Political Science</p>
                                                <br>
                                                <p> Tulane University School of Law</p>
                                                <p style="font-size: 12px;">J.D. (2016) | Common Law</p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="modal-header1 justify-content-md-center">
                                            <h5 style="color: #ffffff;">
                                                <i class="fas fa-money-bill-alt"></i> Payments</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <p> FullTime , Freelance , Remote</p>
                                                <p>  Weekly Payment</p>
                                                <p>  Hours Avail: 30 hrs. a week</p>
                                                <p> Annual Salary: $62,000</p> 
                                                <p>  Hourly Rate: $32 hr.</p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                                <div class="modal-header1 justify-content-md-center">
                                    <h5 style="color: #ffffff;"><i class="fas fa-map-marker-alt"></i> Location</h5>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="mb-1">
                                            Boston Harborwalk<br />
                                            Christopher Columbus Park<br />
                                            Boston, MA 02109<br />United States
                                        </div>
                                        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100&amp;height=250&amp;hl=en&amp;q=Christopher%20Columbus%20Park%20Boston+(Boston%20Harborwalk)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        <a href='http://maps-generator.com/'>Maps-Generator.com</a>
                                        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d0dab658d1860a953bd8caf54b4bc3ccec70f14'></script>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="modal-header1 justify-content-md-center">
                                            <h5 style="color: #ffffff;">
                                                <i class="fas fa-certificate"></i> Certifications</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <p> Certificate of Recognition</p>
                                                <p style="font-size: 12px;">State of Nevada Office of Governor Brian Sandova</p>
                                                <br>
                                                <p>Notary Public</p>
                                                <p style="font-size: 12px;">Secretary of State - State of Nevada</p>
                                            </div>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="modal-header1 justify-content-md-center">
                                    <h5 style="color: #ffffff;"><i class="fas fa-id-card"></i> About Me</h5>
                                </div>
   
                                <div class="card">
                                    <div class="card-body">
                                        When I was a little boy in elementary school, the neighborhood kids and I all looked forward to playing so many games in my backyard during the long summer holidays between grades. For instance, one of our favorite games was whiffle ball, a kid's version of baseball. All we needed was a cheap plastic bat and a cheap plastic ball and we could entertain ourselves in the backyard from morning to afternoon. Or if we broke the bat or lost the ball, we would play "Red Rover, Red Rover." To play this game, we would join hands in two opposing lines and hurl ourselves at the locked wrists of the opposing team, trying to break through their line. Once the sun set, our favorite game was hide-and-seek. My backyard was perfect because there were lots of bushes and trees where we could hide out of sight of the kid who was "it." Even on rainy days, we had fun activities out in the garden shed in the corner of the backyard. For instance, we would often act out our favorite TV game shows, like "Let's Make a Deal," or sing along to the theme song from "The Monkees," a popular TV show about a rock-and-roll band, on my little record player. Even now, fifty years later, I still look back on all those fun summertime games out in my backyard with a lot of fondness.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="modal-header1 justify-content-md-center">
                                            <h5 style="color: #ffffff;">
                                                <i class="fas fa-shield-alt"></i> Qualifications</h5>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card-box">
                                                    <h4 class="header-title">Services</h4>
                                                    <p class="mb-3">These are some of my qualifications</p>
                                                    <div class="pt-1">
                                                        <h6 class="text-uppercase mt-0">HTML5 
                                                            <span class="float-right">100%</span>
                                                        </h6>
                                                        <div class="progress progress-sm m-0">
                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                                 <span class="sr-only">100% Complete</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-2 pt-1">
                                                        <h6 class="text-uppercase">PHP 
                                                            <span class="float-right">100%</span>
                                                        </h6>
                                                        <div class="progress progress-sm m-0">
                                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                                                            <span class="sr-only">100% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 pt-1">
                                                    <h6 class="text-uppercase">WordPress 
                                                        <span class="float-right">100%</span>
                                                    </h6>
                                                    <div class="progress progress-sm m-0">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                                                            <span class="sr-only">100% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 pt-1">
                                                    <h6 class="text-uppercase">Laravel 
                                                        <span class="float-right">100%</span>
                                                    </h6>
                                                    <div class="progress progress-sm m-0">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                            <span class="sr-only">100% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-2 pt-1">
                                                    <h6 class="text-uppercase">ReactJs 
                                                        <span class="float-right">100%</span>
                                                    </h6>
                                                    <div class="progress progress-sm m-0">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                                            <span class="sr-only">100% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <div class="tab-pane fade" id="work" role="tabpanel" aria-labelledby="work-tab">
                        <div class="card">
                            <div class="card-header1">
                                History
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <ul class="timeline">
                                            <li>
                                                <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                                                <a href="#" class="float-right">March 2015 - June 2016</a><br>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....
                                            </li>
                                            <li>
                                                <a href="#">21 000 Job Seekers</a>
                                                <a href="#" class="float-right">March 2015 - June 2016</a><br>
                                                Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...
                                            </li>
                                            <li>
                                                <a href="#">Awesome Employers</a>
                                                <a href="#" class="float-right">March 2015 - June 2016</a><br>
                                                Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>                                      
                    </div>
                    
                    <div class="tab-pane fade" id="portfolio" role="tabpanel" aria-labelledby="portfolio-tab">
                        <div class="card">
                            <div class="card-header1">
                                Collection
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <!--materi 1-->
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                            <i class="far fa-dot-circle mr-3"></i>Images
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        <div class="isiMateri">
                                                            <div class="gallery">
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Daytona Beach <small>United States</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>
                                                                    Bad Pyrmont <small>Deutschland</small>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Highlands <small>United States</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1448814100339-234df1d4005d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Daytona Beach <small>United States</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1443890923422-7819ed4101c0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Териберка, gorod Severomorsk <small>Russia</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1445964047600-cdbdb873673d?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>
                                                                    Bad Pyrmont <small>Deutschland</small>
                                                                    </figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1439798060585-62ab242d7724?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Yellowstone National Park <small>United States</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1440339738560-7ea831bf5244?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Quiraing, Portree <small>United Kingdom</small></figcaption>
                                                                </figure>
                                                                <figure>
                                                                    <img src="https://images.unsplash.com/photo-1441906363162-903afd0d3d52?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                    <figcaption>Highlands <small>United States</small></figcaption>
                                                                </figure>
                                                            </div>

                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
                                                                <symbol id="close" viewBox="0 0 18 18">
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
                                                                            S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
                                                                            l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
                                                                            c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
                                                                            s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z"/>
                                                                </symbol>
                                                            </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            <!--materi 2-->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="far fa-dot-circle mr-3"></i>Videos
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        <div class="isiMateri">
                            <div class="row">
                                <div class="col-sm-4 pb-3">
                                    <img class="mklbItem" src="{{ asset('public/user-dash/k_vid/vid_thumb/happyfeet_2.jpg') }}" data-video-src="{{ asset('public/user-dash/k_vid/video/happyfeet2.mp4') }}"  />
                                </div>
                                <div class="col-sm-4 pb-3">
                                    <img class="mklbItem" src="{{ asset('public/user-dash/k_vid/vid_thumb/madagascar.jpg') }}" data-video-src="{{ asset('public/user-dash/k_vid/video/madagascar.mp4') }}"  />
                                </div>
                                <div class="col-sm-4 pb-3">
                                    <img class="mklbItem" src="{{ asset('public/user-dash/k_vid/vid_thumb/buck.jpg') }}" data-video-src="{{ asset('public/user-dash/k_vid/video/video.mp4') }}"  />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--materi 3-->
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="far fa-dot-circle mr-3"></i>Music
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" data-parent="#accordion" aria-labelledby="headingThree">
                    <div class="panel-body">
                        <div class="isiMateri">
                            <div class="panel panel-default audio-panel">
                                <audio id="audio"  preload="auto" tabindex="0" controls>
                                    <source src="{{ asset('public/user-dash/k_2You/music/audio/Lately.mp3') }}">
                                </audio>
                            </div>
                            <ul id="playlist">
                                <li class="active list-group-item">
                                    <a href="{{ asset('public/user-dash/k_2You/music/audio/Lately.mp3') }}">
                                        Title of Song and Text
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ asset('public/user-dash/k_2You/music/audio/Promises.mp3') }}">
                                        Title of Song and Text
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <a href="{{ asset('public/user-dash/k_2You/music/audio/All Time.mp3') }}">
                                        Title of Song and Text
                                    </a>
                                </li>
                                <li class="list-group-item" style="display:none;">
                                    <a href="#">
                                        Sample 3
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>















                                    
                                    </div>
                                </div>
                            </div>
                        </div>                                      
                    </div>

                    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="review-tab">
                        </br>
                        <div class="card">
                            <div class="card-header1">
                                Reviews
                            </div>
                            <div class="container">
                                <h5><span>4</span> review for <span>{{Auth::user()->username}}</span></h5>
                                <div class="media mt-3 mb-4">
                                    <img class="d-flex mr-3 z-depth-1 rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/9.jpg')}}" width="62" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between">
                                            <p class="mt-1 mb-2">
                                                <strong>Marthasteward </strong><span>– </span><span>January 28, 2020</span>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0">Nice one, love it!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media mt-3 mb-4">
                                    <img class="d-flex mr-3 z-depth-1 rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/13.jpg')}}" width="62" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between">
                                            <p class="mt-1 mb-2">
                                                <strong>Marthasteward </strong><span>– </span><span>January 28, 2020</span>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0">Nice one, love it!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media mt-3 mb-4">
                                    <img class="d-flex mr-3 z-depth-1 rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/23.jpg')}}" width="62" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between">
                                            <p class="mt-1 mb-2">
                                                <strong>Marthasteward </strong><span>– </span><span>January 28, 2020</span>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0">Nice one, love it!</p>
                                    </div>
                                </div>
                                <hr>
                                <div class="media mt-3 mb-4">
                                    <img class="d-flex mr-3 z-depth-1 rounded-circle" src="{{ asset('public/user-dash/images/users/profiles/16.jpg')}}" width="62" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <div class="d-sm-flex justify-content-between">
                                            <p class="mt-1 mb-2">
                                                <strong>Marthasteward </strong><span>– </span><span>January 28, 2020</span>
                                            </p>
                                            <ul class="list-inline">
                                                <li class="list-inline-item"><i class="list-inline-item fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                            </ul>
                                        </div>
                                        <p class="mb-0">Nice one, love it!</p>
                                    </div>
                                </div>
                                <hr>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>                             

@endsection
@section('additional-js')
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >popup = {
  init: function(){
    $('figure').click(function(){
      popup.open($(this));
    });
    
    $(document).on('click', '.popup img', function(){
      return false;
    }).on('click', '.popup', function(){
      popup.close();
    })
  },
  open: function($figure) {
    $('.gallery').addClass('pop');
    $popup = $('<div class="popup" />').appendTo($('body'));
    $fig = $figure.clone().appendTo($('.popup'));
    $bg = $('<div class="bg" />').appendTo($('.popup'));
    $close = $('<div class="close"><svg><use xlink:href="#close"></use></svg></div>').appendTo($fig);
    $shadow = $('<div class="shadow" />').appendTo($fig);
    src = $('img', $fig).attr('src');
    $shadow.css({backgroundImage: 'url(' + src + ')'});
    $bg.css({backgroundImage: 'url(' + src + ')'});
    setTimeout(function(){
      $('.popup').addClass('pop');
    }, 10);
  },
  close: function(){
    $('.gallery, .popup').removeClass('pop');
    setTimeout(function(){
      $('.popup').remove()
    }, 100);
  }
}

popup.init()

//# sourceURL=pen.js
</script>
<script>
    var audio;
var playlist;
var tracks;
var current;

init();
function init(){
    current = 0;
    audio = $('#audio');
    playlist = $('#playlist');
    tracks = playlist.find('li a');
    len = tracks.length - 1;
    audio[0].volume = 0.5;
    audio[0].play();
    playlist.find('a').click(function(e){
        e.preventDefault();
        link = $(this);
        current = link.parent().index();
        run(link, audio[0]);
    });
    audio[0].addEventListener('ended',function(e){
        current++;
        if(current == len){
            current = 0;
            link = playlist.find('a')[0];
        }else{
            link = playlist.find('a')[current];    
        }
        run($(link),audio[0]);
    });
}
function run(link, player){
        player.src = link.attr('href');
        par = link.parent();
        par.addClass('active').siblings().removeClass('active');
        audio[0].load();
        audio[0].play();
}
</script>

<script type="text/javascript" src="{{ asset('public/user-dash/js/kun_pro.js') }}"></script>
@endsection