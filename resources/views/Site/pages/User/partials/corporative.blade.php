<div class="card">
    <div class="card-header">
        <h3> Kullanıcı Bilgileri</h3>
    </div>
    <div class="card-body">
        <p>{{$user->company_name}} bilgilerinizi buradan güncelleye bilirsiniz </p>
        <form action="{{route('site.signup')}}" role="form" method="post">
            <div class="row">

                <div class="col-md-12">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Firma adı <span class="required">*</span></label>
                            <input  value="{{$user->company_name}}" class="form-control" name="company_name" type="text" >
                        </div>
                        <div class="form-group col-md-12">
                            <label>Adres Tipi <span class="required">*</span></label>
                            <select name="adrestype" id="">
                                <option value="0">Bireysel</option>
                                <option value="1">Kurumsal</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Adres 1 <span class="required">*</span></label>
                            <input required=""  value=""   class="form-control" name="address1" type="text">
                        </div>
                        <div class="form-group col-md-12">
                            <label>Adres 2  <span class="required">*</span></label>
                            <input required=""  value=""  class="form-control" name="address2">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Posta Kodu<span class="required">*</span></label>
                            <input required=""  max="5" value=""  class="form-control" name="postcode" type="number">
                        </div>


                        <div class="form-group col-md-6">
                            <label>Vergi Dairesi <span class="required">*</span></label>
                            <input required=""  value=""  class="form-control" name="gsm" type="number">
                        </div>
                        @csrf
                        <div class="form-group col-md-6">
                            <label>Vergi Numarası  </label>
                            <input  class="form-control" value=""  name="gsm2" type="number">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tc Kimlik </label>
                            <input   class="form-control"  value=""  name="phone" type="number">
                        </div>


                        <div class="col-md-12">
                            <button type="submit" class="btn btn-fill-out" name="corporative_submit" value="Submit"> Bilgilerini Güncelle</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
