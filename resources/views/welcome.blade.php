<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<img id="holder" style="margin-top:15px;max-height:100px;">
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="/vendor/laravel-filemanager/js/lfm.js"></script>
<script>
    $('#lfm').filemanager('image');
</script>