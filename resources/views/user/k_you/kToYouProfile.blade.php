@extends('layouts.user')
@section('title', 'Kunnec to You Profile')
@section('css/task')
<link href="{{ asset('public/user-dash/css/task.css') }}" rel="stylesheet"></link>
<link href="{{ asset('public/user-dash/css/kun_pro.css') }}" rel="stylesheet"></link>
<link href="https://cdn.plyr.io/3.6.2/plyr.css" rel="stylesheet"></link>

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


</style>


<style class="cp-pen-styles">*,
*::before,
*::after {
  box-sizing: border-box;
}

/*img {
  display: block;
}*/

.gallery {
  position: relative;
  z-index: 2;
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
    height: 27vw;
    object-fit: cover;
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
  /*-webkit-animation: poppy 500ms linear both;
          animation: poppy 500ms linear both;*/
}
.popup figure img {
        width: 100%;
    max-height: 500px;
    object-fit: contain;
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
.education {
    margin-bottom: 10px;
}
.school_name {
    font-size: 18px;
    font-weight: 500;
    color: #000;
    margin: 0px;
}
.edu_dgree {
    margin: 0px;
    padding: 0px;
    font-size: 13px;
}
.work_history {
    margin-bottom: 10px;
}
.work_history .work_title{
    color: #235522;
    font-size: 19px;
    font-weight: 500;
}
/*HP*/ 
@media screen and (max-width: 767px){
    .gallery figure img {
        height: 50vw;
    }
    .gallery figure{
        flex-basis: 100%;
            margin: 0px;
    }
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

<style>
    
    /* Typography / Links
    ================================================== */

    .hidden {
        display: none !important;
    }

    .no-support {
        margin: 2rem auto !important;
        text-align: center !important;
        width: 90% !important;
    }

    /* Audio Player Styles
    ================================================== */

    audio {
        display: none !important;
    }

    #audiowrap,
    #plwrap {
        margin: 0 auto !important;
    }

    #tracks {
        font-size: 0 !important;
        position: relative !important;
        text-align: center !important;
    }

    #nowPlay {
        display: block !important;
        font-size: 0 !important;
    }

    #nowPlay span {
        display: inline-block !important;
        font-size: 1.05rem !important;
        vertical-align: top !important;
    }

    #nowPlay span#npAction {
        padding: 21px !important;
        width: 30% !important;
    }

    #nowPlay span#npTitle {
        padding: 21px !important;
        text-align: right !important;
        width: 70% !important;
    }

    #plList li {
        cursor: pointer !important;
        display: block !important;
        margin: 0 !important;
        padding: 21px 0 !important;
    }

    #plList li:hover {
        background-color: rgba(200, 247, 197); !important;
    }

    .plItem {
        position: relative !important;
    }

    .plTitle {
        left: 50px !important;
        overflow: hidden !important;
        position: absolute !important;
        right: 65px !important;
        text-overflow: ellipsis !important;
        top: 0 !important;
        white-space: nowrap !important;
    }

    .plNum {
        padding-left: 21px !important;
        width: 25px !important;
    }

    .plLength {
        padding-left: 21px !important;
        position: absolute !important;
        right: 21px !important;
        top: 0 !important;
    }

    .plSel,
    .plSel:hover {
        background-color: rgba(200, 247, 197) !important;
        color: #fff !important;
        cursor: default !important !important;
    }

    #tracks a {
        border-radius: 3px !important;
        color: #fff !important;
        cursor: pointer !important;
        display: inline-block !important;
        font-size: 2.3rem !important;
        height: 40px !important;
        line-height: 0.2 !important;
        margin: 0 5px 30px !important;
        padding: 12px !important;
        text-decoration: none !important;
        transition: background 0.3s ease !important;
    }

    #tracks a:hover,
    #tracks a:active {
        background-color: rgba(0, 0, 0, 0.1) !important;
        color: #fff !important;
    }

    #tracks a::-moz-focus-inner {
        border: 0 !important;
        padding: 0 !important;
    }

    /* Plyr Overrides
    ================================================== */

    .plyr__controls__item.plyr__control:hover, .plyr--audio .plyr__controls button:hover, .plyr--audio .plyr__controls button.tab-focus:focus, .plyr__play-large {
        background-color: rgba(0, 153, 0) !important;
    }

    .plyr__progress--played,
    .plyr__volume--display {
        color: rgba(0, 153, 0) !important;
    }

    .plyr--audio .plyr__progress--buffer,
    .plyr--audio .plyr__volume--display {
        background-color: rgba(0, 153, 0) !important;
    }

    .plyr--audio .plyr__progress--buffer {
        color: rgba(0, 153, 0) !important;
    }

    .plyr__controls .plyr__controls__item.plyr__time {
        font-size: 14px !important;
        margin-left: 7px !important;
    }

    /* Media Queries
    ================================================== */


    @media only screen and (max-width: 600px) {
        #nowPlay span#npAction {
            display: none;
        }

        #nowPlay span#npTitle {
            display: block;
            text-align: center;
            width: 100%;
        }
    }

.port_videos{
    background: #000;
}
.port_videos .video_list {
    height: 400px;
    overflow-y: scroll;
    padding: 0px;
}
.port_videos .video_thumb {
    width: 100%;
    height: 150px;
    object-fit: cover;
}
.port_videos video {
    height: 400px;
    padding: 0px;
}
.port_videos .video_list a {
	display: block;
	opacity: .5;
	transition: 1s opacity;
}
.port_videos .video_list a:hover {
	opacity: 1;
}
@media only screen and (max-width: 991px) {
    .port_videos .video_list{
        height: auto;
    }
    .port_videos .video_list a{
        width: 25%;
        float: left;
    }
}
</style>
@endsection
@section('content')
@include('user.k_you.profileFilters')  

@if($profile)
<div class="card">
    <div class="card-body">
    @if(session()->has('success'))
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-success">
                    <strong>{{ session('success') }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if(session()->has('error'))
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="alert alert-danger">
                    <strong>{{ session('error') }}</strong>
                </div>
            </div>
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-dismissible alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <div class="notification-avatar text-center">
                <div class="avatar avatar-5xl mr-3 justify-content-center">
                    <img class="img-thumbnail img-fluid rounded-circle" src="{{$profile->user->image}}" alt="" />
                </div>
            </div> 
        </div>
        <div class="col-md-auto">
            <div class="row">
                <div class="col">
                    <h1 class="display-4" style="font-size: 4vw;font-weight: 500;">{{$profile->user->first_name}} {{$profile->user->last_name}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>{{$profile->job_category->name}}</h4>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @if($profile->is_email)
                    <h5>
                        <small class="text-muted">{{$profile->user->email}}</small>
                    </h5>
                    @endif
                    @if($profile->is_phone)
                    <h5>
                        <small class="text-muted">{{$profile->phone}}</small>
                    </h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if($profile->user_id!=Auth::user()->id)

    <div class="row justify-content-md-center mb-1">
        <div class="col col-lg-2">
            <div class="float-right">
                <small class="text-muted">Rating:</small>
            </div>
        </div>
        <div class="col-md-auto">
            <div class="rate float-left">
                @if($profile->avg_rating)
                    @for($i=1;$i<=5;$i++)
                        <i class="list-inline-item @if($i<=$profile->avg_rating->avg_rating) fa @else far @endif fa-star fa-sm text-warning"></i>
                    @endfor
                @else
                    @for($i=1;$i<=5;$i++)
                        <i class="list-inline-item far fa-star fa-sm text-warning"></i>
                    @endfor
                @endif
               {{-- <input type="radio" id="star5" name="star" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="star" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="star" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="star" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="star" value="1" />
                <label for="star1" title="text">1 star</label> --}}
            </div>
        </div>
        <div class="col col-lg-2">
            <small class="text-muted">(@if($profile->avg_rating){{$profile->avg_rating->avg_rating}}@endif)</small>
        </div>
    </div>
    
    <div class="row justify-content-md-center">
        <button type="button" class="btn1 btn-kunnec" data-toggle="modal" data-target="#profileRating">
            Rate & Review
        </button>
        <button type="button" class="btn1 btn-danger" id="saveFavorite" profile-id="{{$profile->id}}" data-action="@if($is_fav){{'unfavorite'}}@else{{'favorite'}}@endif">@if($is_fav) Un-Favorite @else Save as Favorite @endif</button>
        @if($room_id)
            <a href="{{ route('messages',['room_id'=>$room_id]) }}">
                <button type="button" class="btn1 btn-primary">
                Mesaage Me
                </button>
            </a>
        @else
            <a href="#"><button type="button" class="btn1 btn-primary">Mesaage Me</button></a>
        @endif
    </div>
    @endif
    <div class="row justify-content-md-center">
        <p>Language:</p>
        @if($profile->languages)
            @foreach($profile->languages as $language)
                <p>{{$language}}</p>
            @endforeach
        @endif
    </div>
    <hr class="style12">
    <div class="row justify-content-md-center">
        <ul class="nav">
            @if($profile->is_website)
            <li class="nav-item">
                <a class="nav-link active" href="{{$profile->user->webiste}}"><i class="fas fa-globe"></i><small> My Website</small></a>
            </li>
            @endif
            @if($profile->is_facebook)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->facebook}}"><i class="fab fa-facebook"></i><small> Facebook</small></a>
            </li>
            @endif
            @if($profile->is_linkedin)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->linkedin}}"><i class="fab fa-linkedin"></i><small> LinkedIn</small></a>
            </li>
            @endif
            @if($profile->is_youtube)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->youtube}}"><i class="fab fa-youtube"></i><small> YouTube</small></a>
            </li>
            @endif
            @if($profile->is_patreon)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->patreon}}"><i class="fab fa-patreon"></i><small> Patreon</small></a>
            </li>
            @endif
            @if($profile->is_instagram)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->instagram}}"><i class="fab fa-instagram"></i><small> Instagram</small></a>
            </li>
            @endif
            @if($profile->is_twitter)
            <li class="nav-item">
                <a class="nav-link" href="{{$profile->user->twitter}}"><i class="fab fa-twitter"></i><small> Twitter</small></a>
            </li>
            @endif
        </ul>
    </div>
    </div>
</div>
<div class="card">
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
                                                @if($profile->educations)
                                                    @foreach($profile->educations as $education)
                                                        <div class="education">
                                                            <h4 class="school_name">{{$education->school_name}}</h4>
                                                            <p class="edu_dgree">{{$education->degree}} ({{$education->year}})</p>
                                                        </div>
                                                    @endforeach
                                                @endif
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
                                                <p>@if($profile->availability){{implode(", ",$profile->availability)}}@endif</p>
                                                <p>  {{$profile->payment_type}} Payment</p>
                                                <p>  Hours Avail: {{$profile->hr_week}} hrs. a week</p>
                                                <p> Annual Salary: ${{$profile->annual_salary}}</p> 
                                                <p>  Hourly Rate: ${{$profile->hr_rate}} hr.</p>
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
                                            @if($profile->is_address){{$profile->address}},@endif<br>
                                            @if($profile->user->loc_city){{$profile->user->loc_city->name}}@endif
                                            @if($profile->user->loc_state){{$profile->user->loc_state->name}}@endif <br>
                                            @if($profile->user->loc_country){{$profile->user->loc_country->name}}@endif 
                                        </div>
                                        @if($profile->is_address)
                                        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100&amp;height=250&amp;hl=en&amp;q={{$profile->address}}&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                                        <a href='http://maps-generator.com/'>Maps-Generator.com</a>
                                        <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d0dab658d1860a953bd8caf54b4bc3ccec70f14'></script>
                                        @endif
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
                                                @if($profile->certifications)
                                                    @foreach($profile->certifications as $certification)
                                                        <div class="education">
                                                            <h4 class="school_name">{{$certification->title}}</h4>
                                                            <p class="edu_dgree">{{$certification->descriptions}} ({{$certification->year}})</p>
                                                        </div>
                                                    @endforeach
                                                @endif
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
                                    <div class="card-body text-pre-line break">
                                        {!! $profile->about_me !!}
                                    </div>
                                </div>
                                <!-- <div class="row">
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
                                </div> -->
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
                                            @if($profile->work_histories)
                                                @foreach($profile->work_histories as $work_history)
                                                    <li class="work_history">
                                                        <spna class="work_title">{{$work_history->job_title}}</spna>
                                                        <a href="#" class="float-right">{{$work_history->start_date->format('M Y')}} - {{$work_history->end_date->format('M Y')}}</a><br>
                                                        {!!$work_history->descriptions!!}
                                                    </li>
                                                @endforeach
                                            @endif
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
                                                        <div class="isiMateri1">
                                                            <div class="gallery">
                                                                @if(!$portfolios->isEmpty() && isset($portfolios['img']))
                                                                    @foreach($portfolios['img'] as $portfolio)
                                                                        <figure>
                                                                            <img src="{{$portfolio->file}}?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=600" alt="" />
                                                                            <figcaption>{!! $portfolio->descriptions !!}</figcaption>
                                                                        </figure>
                                                                    @endforeach
                                                                @endif
                                                                <!-- <figure>
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
                                                                </figure> -->
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
                                                            @if(!$portfolios->isEmpty() && isset($portfolios['video']))
                                                            <div class="row port_videos" id="video_player">
                                                                <video controls poster="" class="video_player col-lg-9">
                                                                    <source src="" type="video/mp4">
                                                                    <source src="" type="video/webm">
                                                                </video>
                                                                <div class="col-lg-3 video_list">
                                                                    
                                                                        @foreach($portfolios['video'] as $key=>$portfolio)
                                                                            {{-- <div class="col-sm-4 pb-3">
                                                                                <img class="mklbItem" src="@if(!$portfolio->thumbnail) {{ asset('public/user-dash/images/video_thumbnail.png') }} @else {{ $portfolio->thumbnail}} @endif" data-video-src="{{ $portfolio->file }}"  />
                                                                            </div> --}}
                                                                            <a href="{{ $portfolio->file }}">
                                                                                <img class="video_thumb" src="@if(!$portfolio->thumbnail) {{ asset('public/user-dash/images/video_thumbnail.png') }} @else {{ $portfolio->thumbnail}} @endif" alt="">
                                                                            </a>
                                                                        @endforeach
                                                                    
                                                                </div> 
                                                            </div>
                                                            @endif
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
                                                            
                                                            <div id="audio0">
                                                                <audio id="audio1"  preload="auto" tabindex="0" controls></audio>
                                                            </div>
                                                            <ul id="plList"></ul>
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
                                <h5 style="margin-top: 10px;text-transform: capitalize;"><span>{{$reviews->total()}}</span> review for <span>{{$profile->user->first_name}}</span></h5>
                                @if($reviews->total()>0)
                                    @foreach($reviews as $review)
                                    <div class="media mt-3 mb-4">
                                        <img class="d-flex mr-3 z-depth-1 rounded-circle" src="{{$review->user->image}}" width="62" alt="Generic placeholder image" style="height: 62px;object-fit: cover;">
                                        <div class="media-body">
                                            <div class="d-sm-flex justify-content-between">
                                                <p class="mt-1 mb-2">
                                                    <strong>{{$review->user->first_name}} </strong><span>– </span><span>{{$review->created_at->format('M d, Y')}}</span>
                                                </p>
                                                <ul class="list-inline">
                                                    @for($i=1;$i<=5;$i++)
                                                        <li class="list-inline-item">
                                                            <i class="list-inline-item fas fa-star fa-sm @if($i<=$review->star){{'text-warning'}}@endif"></i>
                                                        </li>
                                                    @endfor
                                                    <!-- <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li>
                                                    <li class="list-inline-item"><i class="fas fa-star fa-sm text-warning"></i></li> -->
                                                </ul>
                                            </div>
                                            <p class="mb-0">{{$review->review_text}}</p>
                                        </div>
                                    </div>
                                    <hr>
                                    @endforeach 
                                @else
                                    <div class="media text-muted pt-3 text-center">
                                        No Record Found
                                    </div>
                                @endif

                                <div class="pagi_row">  
                                    <div class="page_counts"> 
                                        Results: {{ $reviews->firstItem() }}
                                        - {{ $reviews->lastItem() }}
                                        of 
                                        {{ $reviews->total() }}
                                    </div>
                                    <div class="vehi_pagination"> 
                                        {{ $reviews->links() }}
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
<!-- Rate & Review Modal -->
<div class="modal fade" id="profileRating" tabindex="-1" role="dialog" aria-labelledby="RTRVModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header1">
                <img src="{{$profile->user->image}}" width="50" height="50" class="rounded-circle img-border box-shadow-1" alt="user image"> 
                <h5 class="modal-title1" id="RTRVModalLabel">&nbsp; Please Rate and Review :</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="color: #ffffff;">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! Form::open(['route'=>['k2u.settings.createRating']]) !!}
                <input type="hidden" name="profile_id" value="{{$profile->id}}">
                    <div class="form-group pb-2">
                        <div class="row">
                            <div class="col-sm">
                                Select the Rating and Leave a review .
                            </div>
                        </div>
                        <div class="rate float-left ">
                            <input type="radio" id="star51" name="star" value="5" />
                            <label for="star51" title="5 stars">5 stars</label>
                            <input type="radio" id="star41" name="star" value="4" />
                            <label for="star41" title="4 atars">4 stars</label>
                            <input type="radio" id="star31" name="star" value="3" />
                            <label for="star31" title="3 Stars">3 stars</label>
                            <input type="radio" id="star21" name="star" value="2" />
                            <label for="star21" title="2 Stars">2 stars</label>
                            <input type="radio" id="star11" name="star" value="1" />
                            <label for="star11" title="1 star">1 star</label>
                        </div>
                    </div>
                    <br>
                    <hr class="style12">
                    <div class="form-group pt-2">
                        {!! Form::textarea('review_text',null,["class"=>"form-control","rows"=>"6","placeholder"=>"Text Area for Review"])!!}
                    </div>
                </div>
                <div class="modal-footer1">
                    <button type="submit" class="btn1 btn-warning">Submit</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End of Modal -->
@else
<div class="content-wrapper">
    <div class="row gutters">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card m-0">
                <div class="row no-gutters  justify-content-center">
                    <div class="col-lg-6 text-center" style="margin: 20%;">
                        <h3>This user did not setup profile yet !</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
@endsection
@section('additional-js')
<script type="text/javascript">
    $(document).ready(function(){
        $('#saveFavorite').on('click', function(){ 
            var btnObj=$(this);
            var data_action=btnObj.attr("data-action");
            $(".loader_html").show();  
            var profile_id=$(this).attr("profile-id");
            var url="{{ route('k2u.settings.addToFavourite') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url : url,
                method: 'POST',
                data:{"profile_id":profile_id},
            }).done(function (res_data){
                $(".loader_html").hide();
                if(data_action=="favorite"){
                    btnObj.text("Un Favorite");
                    btnObj.attr("data-action","unfavorite")
                }else{
                    btnObj.text("Save as Favorite");
                    btnObj.attr("data-action","favorite")
                }
            }).fail(function () {
                $(".loader_html").hide();
                console.log("unable to get data!");
            });
        });
    });
</script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/plyr/3.6.8/plyr.min.js" ></script>

<script>
    var video_player = document.getElementById("video_player");
    var links = video_player.getElementsByTagName('a');
    for (var i=0; i<links.length; i++) {
        links[i].onclick = handler;
    }
    function handler(e) {
        e.preventDefault();
        videotarget = this.getAttribute("href");
        filename = videotarget.substr(0, videotarget.lastIndexOf('.')) || videotarget;
        video = document.querySelector("#video_player video");
        //video.removeAttribute("controls");
        //video.removeAttribute("poster");
        source = document.querySelectorAll("#video_player video source");
        source[0].src = filename + ".mp4";
        source[1].src = filename + ".webm";
        video.load();
        video.play();    
    }




    const portfolios = <?php echo json_encode($portfolios); ?>;
    const audioData = portfolios.audio;

    const player = new Plyr("#audio1", {
        controls: [
            //"restart",
            "play",
            "progress",
            "current-time",
            "duration",
            "mute",
            "volume",
            //"download"
        ]
    });

    let index = 0,
    playing = false;

    let audio = $("#audio1")
        .on("play", function () {
            playing = true;
        })
        .on("pause", function () {
            playing = false;
        })
        .on("ended", function () {
            if (index + 1 < trackCount) {
                index++;
                loadTrack(index);
                audio.play();
            } else {
                audio.pause();
                index = 0;
                loadTrack(index);
            }
        })
        .get(0)

    for(let i = 0; i < audioData.length; i++){
        let trackNumber = i + 1;
        let trackName = audioData[i].descriptions;
            // trackDuration = audioData[i].duration;
        if (trackNumber.toString().length === 1) {
            trackNumber = "0" + trackNumber;
        }
        $("#plList").append(
            '<li> \
            <div class="plItem"> \
                <span class="plNum">' +
            trackNumber +
            '.</span> \
                <span class="plTitle">' +
            trackName +
            '</span></div> \
        </li>'
        );
    }

    loadTrack = function (id) {
        $(".plSel").removeClass("plSel");
        $("#plList li:eq(" + id + ")").addClass("plSel");
        index = id;
        audio.src = audioData[id].file;
        updateDownload(id, audio.src);
    }

    updateDownload = function (id, source) {
        player.on("loadedmetadata", function () {
            $('a[data-plyr="download"]').attr("href", source);
        });
    },

    playTrack = function (id) {
        loadTrack(id);
        audio.play();
    };

    loadTrack(index);

    
    $("#plList li").on("click", function () {
        var id = parseInt($(this).index());
        if (id !== index) {
            playTrack(id);
        }
    });

    
</script>

<script type="text/javascript" src="{{ asset('public/user-dash/js/kun_pro.js') }}"></script>
@endsection