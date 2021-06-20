<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: whitesmoke;
  background-image: url("https://www.transparenttextures.com/patterns/lyonnette.png");
  border-bottom: 0px solid black;
  height: 450px;
  display: flex;
  justify-content:center;
  align-items: center;
}

/* === Wrapper Styles === */
#FileUpload {
  display: flex;
  justify-content: center;
}
.wrapper {
  margin: 30px;
  padding: 10px;
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
  border-radius: 10px;
  background-color: white;
  width: 415px;
}

/* === Upload Box === */
.upload {
  margin: 10px;
  height: 85px;
  border: 8px dashed #e6f5e9;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
}
.upload p {
  margin-top: 12px;
  line-height: 0;
  font-size: 22px;
  color: #0c3214;
  letter-spacing: 1.5px;
}
.upload__button {
  background-color: #e6f5e9;
  border-radius: 10px;
  padding: 0px 8px 0px 10px;
}
.upload__button:hover {
  cursor: pointer;
  opacity: 0.8;
}

/* === Uploaded Files === */
.uploaded {
  width: 375px;
  margin: 10px;
  background-color: #e6f5e9;
  border-radius: 10px;
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
}
.file {
  display: flex;
  flex-direction: column;
}
.file__name {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: baseline;
  width: 300px;
  line-height: 0;
  color: #0c3214;
  font-size: 18px;
  letter-spacing: 1.5px;
}
.fa-times:hover {
  cursor: pointer;
  opacity: 0.8;
}
.fa-file-pdf {
  padding: 15px;
  font-size: 40px;
  color: #0c3214;
}
</style>

</head>
<body>
<div id="FileUpload">
  <div class="wrapper">
    <div class="upload">
      <p>Drag files here or <span class="upload__button">Browse</span></p>
    </div>
    <div class="uploaded uploaded--one">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>lorem_ipsum.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:100%"></div>
        </div>
      </div>
    </div>
    <div class="uploaded uploaded--two">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>dolor_sit.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:80%"></div>
        </div>
      </div>
    </div>
    <div class="uploaded uploaded--three">
      <i class="far fa-file-pdf"></i>
      <div class="file">
        <div class="file__name">
          <p>amet_consectetur.pdf</p>
          <i class="fas fa-times"></i>
        </div>
        <div class="progress">
          <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width:60%"></div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>