<!DOCTYPE html>
<html lang="en">
<head>
<meta charset=utf-8>
<meta name="viewport" content="width=620">
<title>HTML5 Demo: Drag and drop, automatic upload</title>
<script src="js/h5utils.js"></script></head>
<body>
<section id="wrapper">


<style>
#holder { background: url(person.png); width: 180px; min-height: 264px; margin: 20px auto;}
#holder.hover { background: url(person.png); }
#holder img { display: block; margin: 10px auto; }
#holder p { margin: 10px; font-size: 14px; }
progress { width: 100%; }
progress:after { content: '%'; }
.fail { background: #c00; padding: 2px; color: #fff; }
.hidden { display: none !important;}
</style>
<article>
  <div id="holder">
  </div> 
  <p id="upload" class="hidden"><label>Drag & drop not supported, but you can still upload via this input field:<br><input type="file"></label></p>
  <p id="filereader">File API & FileReader API not supported</p>
  <p id="formdata">XHR2's FormData is not supported</p>
  <p id="progress">XHR2's upload progress isn't supported</p>
</article>

<script>
var holder = document.getElementById('holder'),
    tests = {
      filereader: typeof FileReader != 'undefined',
      dnd: 'draggable' in document.createElement('span'),
      formdata: !!window.FormData,
      progress: "upload" in new XMLHttpRequest
    }, 
    support = {
      filereader: document.getElementById('filereader'),
      formdata: document.getElementById('formdata'),
      progress: document.getElementById('progress')
    },
    acceptedTypes = {
      'image/png': true,
      'image/jpeg': true,
      'image/gif': true
    },
    progress = document.getElementById('uploadprogress'),
    fileupload = document.getElementById('upload');

"filereader formdata progress".split(' ').forEach(function (api) {
  if (tests[api] === false) {
    support[api].className = 'fail';
  } else {
    // FFS. I could have done el.hidden = true, but IE doesn't support
    // hidden, so I tried to create a polyfill that would extend the
    // Element.prototype, but then IE10 doesn't even give me access
    // to the Element object. Brilliant.
    support[api].className = 'hidden';
  }
});

function previewfile(file) {
  if (tests.filereader === true && acceptedTypes[file.type] === true) {
    var reader = new FileReader();
    reader.onload = function (event) {
      var image = new Image();
      image.src = event.target.result;
      image.width = 0; // a fake resize
      holder.appendChild(image);
    };

    reader.readAsDataURL(file);
  }  else {
    holder.innerHTML += '<p>Uploaded ' + file.name + ' ' + (file.fileSize ? (file.fileSize/1024|0) + 'K' : '');
    console.log(file);
  }
}

function readfiles(files) {
    debugger;
    var formData = tests.formdata ? new FormData() : null;
    for (var i = 0; i < files.length; i++) {
      if (tests.formdata) formData.append('file', files[i]);
      previewfile(files[i]);
    }

    // now post a new XHR request
    if (tests.formdata) {
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'index2.php');
      xhr.onload = function() {
        progress.value = progress.innerHTML = 100;
      };

      if (tests.progress) {
        xhr.upload.onprogress = function (event) {
          if (event.lengthComputable) {
            var complete = (event.loaded / event.total * 100 | 0);
            progress.value = progress.innerHTML = complete;
            document.getElementById("holder").style.background = "url(thankyou.png)"
          }
        }
      }

      xhr.send(formData);
    }
}

if (tests.dnd) { 
  holder.ondragover = function () { this.className = 'hover'; return false; };
  holder.ondragend = function () { this.className = ''; return false; };
  holder.ondrop = function (e) {
    this.className = '';
    e.preventDefault();
    readfiles(e.dataTransfer.files);
  }
} else {
  fileupload.className = 'hidden';
  fileupload.querySelector('input').onchange = function () {
    readfiles(this.files);
  };
}
</script>
<script src="js/prettify.packed.js"></script>
<script>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
try {
var pageTracker = _gat._getTracker("UA-1656750-18");
pageTracker._trackPageview();
} catch(err) {}</script>

<script>
$(document).ready(
    
v = document.getElementById("uploadprogress").value;
    
document.title = v.toString();

if(v >= 100){
    document.getElementById("holder").style.background = "url(thankyou.png)";
    document.getElementById("uploadprogress").style.display="none";
    var triggerNumber = document.getElementById("txtTrigNo").value();
    var url = "http://dev.mytest.letspan.com/";
window.location = url;

)}


</script>
</body>
</html>












