<section id="slide">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div id="carouselExampleCaptions" class="carousel slide mt-1" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('images/mau_phoi_bang.jpg') }}" class="d-block w-100" alt="Mau phoi bang dai hoc online">
                <div class="carousel-caption">
                  <h5>Mẫu phôi bằng tốt nghiệp của học viên không ghi hình thức đào tạo.</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/chi_xet_tuyen.jpg') }}" class="d-block w-100" alt="anh demo">
                <div class="carousel-caption">
                  <h5>Chỉ xét tuyển Đại học, không thi tuyển</h5>
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{ asset('images/thoi_gian_chuong_trinh.jpg') }}" class="d-block w-100" alt="anh demo">
                <div class="carousel-caption">
                  <h5>Thời gian và chương trình học linh hoạt phù hợp mọi đối tượng</h5>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <form action="{{ route('tvts') }}" method="POST">
            @csrf
            <div class="formtuyensinh bg-success text-white mt-1 p-2 rounded">
              <h5 class="header text-center">Tư vấn tuyển sinh</h5>
              <div class="form-group">
                <label for="tvtsten">Họ tên <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="tvtsten" placeholder="Họ tên" id="tvtsten">
              </div>
              <div class="form-group">
                <label for="tvtssdt">Số điện thoại <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="tvtssdt" placeholder="Số điện thoại" id="tvtssdt">
              </div>
              <div class="form-group">
                <label for="tvtsnganh">Ngành học</label>
                <select class="form-control" name="tvtsnganh" id="tvtsnganh">
                  <option value="0">-- Chọn ngành học --</option>
                  <option value="Luật">Luật</option>
                  <option value="Luật kinh tế">Luật kinh tế</option>
                  <option value="Kế toán">Kế toán</option>
                  <option value="Quản trị kinh doanh">Quản trị kinh doanh</option>
                  <option value="Công nghệ thông tin">Công nghệ thông tin</option>
                  <option value="Quản lý đất đai">Quản lý đất đai</option>
                  <option value="Khoa học thư viện">Khoa học thư viện</option>
                  <option value="Ngôn ngữ Anh">Ngôn ngữ Anh</option>
                </select>                
              </div>
              <div class="form-group">
                <label for="tvtsdiachi">Địa chỉ</label>
                <input class="form-control" type="text" name="tvtsdiachi" placeholder="Địa chỉ" id="tvtsdiachi">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-outline-warning btn-block">Gửi yêu cầu</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>