@extends('UserView.UserMaster.UserMaster')
@section('css')
    <link rel="stylesheet" href="{{asset('css/vendor/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/responsive.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('css/vendor/jquery-jvectormap-1.2.2.css')}}">
@endsection

@section('main')
            @include('UserView.Partial.navbarstatic')

    <div class="container-fluid">
        <div class="card mb-3">
            <div class="row no-gutters" style="box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); margin-top: 30px">
                <div class="col-lg-6">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgnYxIVbqXeA-KxoHji_ZeSTuWa5VX4YGfDw&s" alt="..." style="width: 100%; height: 100%">
                </div>
                <div class="col-lg-6" style="background-color: rgb(223, 249, 251)">
                    <div class="card-body">
                        <h5 class="card-title" style="font-size: 50px; text-align: center">Toy store</h5>
                        <p style="font-size: 55px"><strong>Our mission</strong> is to bring <strong>joy to lives</strong>
    by offering <strong>quality toys</strong> that create <strong>happy memories</strong> in <strong>loving homes.</strong></p>


                    </div>
                </div>
            </div>
        </div>

        <div style="margin: 50px 0px; box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); padding: 30px 15px; background-color: rgba(223, 230, 233,1.0)">
    <h1 style="font-size: 50px; text-align: center">About Toy Shop</h1>
    <p style="font-size: 18px; text-align: center">We are a community of toy enthusiasts, dedicated to bringing joy and creativity to families and individuals alike. Our mission is to connect the best toy makers with caring, imaginative customers. We hold ourselves and our customers to the highest standards and strive to enhance the play experience for every child and family that becomes part of our community.</p>
</div>


        <div class="card mb-3" style="box-shadow: 15px 0px 5px 5px rgba(0, 0, 0, 0.25); background-color: rgb(248, 239, 186)">
            <div class="row no-gutters">
                <div class="col-lg-7" style="text-align: center; padding-top: 15px">
                    <h1>Location</h1>
                    <h3><i class="fas fa-address-card" style="font-size: 30px;"></i> Nguyễn Quân</h3>
                    <p style="font-size: 20px">2 Founder of PECA Toy shop with the mission selling good toy.</p>

                    <h3><i class="fas fa-building" style="font-size: 30px;"></i> Address</h3>

                    <p style="font-size: 20px">20 Đ. Cộng Hòa, Phường 12, Tân Bình, Hồ Chí Minh</p>

                    <h3><i class="fas fa-phone" style="font-size: 30px;"></i> Support</h3>
                    <p style="font-size: 20px">Telephone: 0123456789</p>
                    <p style="font-size: 20px">Email 1: QuanN@fpt.edu.vn</p>


                </div>
                <div class="col-lg-5">
                    <div class="map row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.103138685977!2d106.64987797537934!3d10.803412158694684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e639bf01243%3A0x700ebdccb5a04987!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1724556912523!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1862.1078727215474!2d105.7901535!3d21.0240518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454b329f68977%3A0x6ddf5ff1e829fc56!2zxJDhuqFpIEjhu41jIEdyZWVud2ljaA!5e0!3m2!1svi!2s!4v1650813917367!5m2!1svi!2s"
                            width="100%" height="460" style="border:0" allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>


        <h2 style="text-align: center; font-size: 50px; margin-bottom: 20px">Founder</h2>


        <div class="card mb-3" style="box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25); border: 1px solid black">
            <div class="row no-gutters">
                <div class="col-sm-3" style="height: 250px;width: 250px;text-align: center;">
                    <img src="https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/328490037_535453128566964_6423727083947430733_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=833d8c&_nc_ohc=zFHfOVDTs24Q7kNvgHvhS0G&_nc_ht=scontent.fhan14-1.fna&oh=00_AYAlvT7Bt_B-ChTEmsg_dDy-C_j-cQUrb_hdvoLOFFeSIg&oe=66D066EF" class="card-img rounded-circle" alt="founder"
                         style="height: 90%; width: 65%; margin-top: 15px">
                </div>
                <div class="col-sm-9">
                    <div class="card-body">
                        <h3 class="card-title text-dark">Nguyễn Quân</h3>
                        <p style="font-size: 18px" class="text-dark">Founder</p>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('UserView.Partial.footer')
@endsection
