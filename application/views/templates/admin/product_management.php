<div class="container-fluid" id="vienxam">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"><p class="font8 font12">Quản lí sản phẩm</p></div>
    </div>
    <div class="row">
		<div class="col-md-2">
            <div class="row">
            <form method="POST">
                <div class="col-md-10"><input type="text" style="width:213px" name="search" placeholder="Sản phẩm..." class="form-control box-shadow" id="text"></div>
                <div class="col-md-1" id="button"><button formaction="/TheGioiMobi/admin_controller/search/" type="submit" class="btn btn-default" value="product" name="product"><span class="glyphicon glyphicon-search"></span></button></div>
            </form>
            </div>
            <div class="row"><a href="#"><button type="button" class="btn btn-primary"id="bt4">Thêm</button></a></div>
        </div>
        <div class="col-md-10">
		    <div class="row" id="vienda"><p class="font4" >&#9733Thông tin sản phẩm:</p></div>