   <!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
<?php    include '../../../client_session.php'; ?>
    
    <meta http-equiv="refresh" target="_blank" content="2; url=index.php"/>
  
<div class="atom">
  <div class="core"></div>
  <div class="core"></div>
</div>

   <style type="text/css">
/* Preloader */
body, .atom, .core, .core::before, .core::after {
  display: flex;
  align-items: center;
  justify-content: center;
}

body {
  width: 100%;
  height: 100%;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  box-sizing: border-box;
}

html {
  width: 100vw;
  height: 100vh;
}

body {
  background-color: #00204a;
  overflow: hidden;
}

.atom {
  width: 300px;
  height: 300px;
  transform-style: preserve-3d;
}

.core, .core::before, .core::after {
  position: absolute;
  border-radius: 50%;
  transform-style: preserve-3d;
  animation: 4s linear infinite;
}
.core {
  width: 50%;
  height: 50%;
  animation-name: rotate3DZ;
}
.core::before, .core::after {
  width: 200%;
  height: 200%;
  content: '';
  border: 3px solid #005792;
  box-shadow: 0 0 3px 3px #d9faff, 0 0 3px 3px #d9faff inset;
}
.core:first-child {
  background: radial-gradient(circle at 25% 25%, #d9faff -75%, #00bbf0, #00204a 75%);
}
.core:first-child::before {
  animation-name: rotate3DX;
}
.core:first-child::after {
  animation-name: rotate3DY;
}
.core:last-child {
  box-shadow: 0 0 75px 3px #d9faff;
}
.core:last-child::before {
  animation-name: rotate3DXY;
}
.core:last-child::after {
  animation-name: rotate3DYX;
}

@keyframes rotate3DX {
  to {
    transform: rotate3d(-1, 0, 0, 360deg);
  }
}
@keyframes rotate3DY {
  to {
    transform: rotate3d(0, 1, 0, 360deg);
  }
}
@keyframes rotate3DZ {
  to {
    transform: rotate3d(0, 0, 1, 360deg);
  }
}
@keyframes rotate3DXY {
  to {
    transform: rotate3d(1, -1, 0, 360deg);
  }
}
@keyframes rotate3DYX {
  to {
    transform: rotate3d(1, 1, 0, 360deg);
  }
}

</style>
</body>
    </html> 