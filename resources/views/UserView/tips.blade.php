@extends('UserView.UserMaster.UserMaster')
@section('main')
    @include('UserView.Partial.navbarstatic')
    <div class="container-fluid">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0" style="font-size: 18px">
            <li class="breadcrumb-item"><a href="{{route('user.view')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tips</li>
        </ol>
    </nav>
    <h1 class="text-dark" style="font-size: 50px"><strong>Toy Selection Guide for Parents</strong></h1>
    <h4 class="text-dark" style="margin: 30px 0">Updated: 04-25-2022 | Author: Quan Nguyen</h4>
    <div class="row">
        <div class="col-lg-2">
            <div id="list-example" class="list-group sticky-top" style="border: none; padding-top: 30px">
                <h4 style="text-align: center">In this article</h4>
                <a class="list-group-item list-group-item-action" href="#list-item-1">Introduction</a>
                <a class="list-group-item list-group-item-action" href="#list-item-2">The Do’s and Don’ts of Toy Selection</a>
                <a class="list-group-item list-group-item-action" href="#list-item-3">How to Choose Age-Appropriate Toys</a>
                <a class="list-group-item list-group-item-action" href="#list-item-4">Engaging Your Child in Playtime</a>
            </div>
        </div>

        <div class="col-lg-7">
            <div data-spy="scroll" data-target="#list-example" data-offset="0">
                <h3 id="list-item-1" class="text-dark">Introduction</h3>
                <p style="font-size: 17px;">Selecting the right toys for your child is essential for their development and enjoyment. The right toys not only provide entertainment but also support learning and creativity. As you navigate toy shopping, it’s important to consider a few do’s and don’ts, as well as age-appropriate options to ensure safe and enriching play.</p>
                <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQUSztrbruGev3PjdmNmlvAHbqDadzFWuwkaP8vq2tkZUpbLd7_PTDDOMIkLtDfM-gTcBIulwitWK2YnJvbWNLkumbSH0denVEUr8lUGNrg&usqp=CAE" alt=""
                     style="height: 500px; width: 100%; margin-bottom: 30px">
                <h3 id="list-item-2" class="text-dark">The Do’s and Don’ts of Toy Selection</h3>
                <p style="font-size: 17px;">While toy selection might seem straightforward, keeping a few guidelines in mind can enhance your shopping experience and support a positive relationship with your child.</p>

                <h3 class="text-dark">Do’s</h3>
                <ul style="font-size: 17px;">
                    <li>Do encourage your child’s creativity by selecting open-ended toys that promote imaginative play.</li>
                    <li>Do consider your child’s interests and preferences when choosing toys.</li>
                    <li>Do read labels for age recommendations to ensure safety and appropriateness.</li>
                    <li>Do look for high-quality materials that are safe and durable.</li>
                    <li>Do engage with your child during playtime to enhance their experience.</li>
                    <li>Do provide a variety of toys to stimulate different types of play.</li>
                    <li>Do promote active play with outdoor toys that encourage physical activity.</li>
                    <li>Do consider educational toys that align with your child’s learning goals.</li>
                    <li>Do reward your child with praise for exploring and learning through play.</li>
                </ul>
                <h3 class="text-dark">Don’ts</h3>
                <ul style="font-size: 17px;">
                    <li>Don’t choose toys with small parts for young children, as they can pose choking hazards.</li>
                    <li>Don’t buy toys that are overly complicated; simplicity often leads to better play.</li>
                    <li>Don’t ignore your child’s feedback; involve them in the selection process.</li>
                    <li>Don’t buy toys that are too similar; variety keeps playtime exciting.</li>
                    <li>Don’t overlook safety features, such as non-toxic materials.</li>
                    <li>Don’t buy toys that promote violence or negative behavior.</li>
                    <li>Don’t forget to rotate toys periodically to maintain your child’s interest.</li>
                </ul>
                <h3 id="list-item-3" class="text-dark">How to Choose Age-Appropriate Toys</h3>
                <p style="font-size: 17px;">Selecting toys that match your child's age is crucial for ensuring they are both engaging and safe. Here are some tips:</p>

                <div class="card">
                    <div class="row no-gutters align-items-center" style="text-align: center;">
                        <div class="col-md-4" style="height: 220px">
                            <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTXBHLiBEtHK1HMmB4fNnAxS_XVFToNns6b9LWBW7Bn_FXsOSTxipomf-UV6txc5Us3gLJzKX66PTsKbu9T5xwudqNFpfWAMkn9gNrYvsdngFHVHDEMUtez&usqp=CAE" alt="" style="height: 100%">
                        </div>
                        <div class="col-md-8" style="background-color: #fcdc81; box-shadow: 10px 0px 5px 5px rgba(0, 0, 0, 0.25);">
                            <div class="card-body">
                                <p class="card-text text-dark" style="font-size: 17px">Always check the recommended age range on packaging. Toys for older kids may have parts that are not suitable for younger children, so safety is key.</p>
                            </div> <!-- end card-body-->
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div>

                <h3 id="list-item-4" class="text-dark">Engaging Your Child in Playtime</h3>
                <p style="font-size: 17px;">To maximize the benefits of play, make it interactive. Here are some strategies:</p>
                <ol style="font-size: 17px;">
                    <li>Join your child in playtime to foster connection and enjoyment.</li>
                    <li>Introduce new toys gradually to spark curiosity and excitement.</li>
                    <li>Encourage open-ended play that allows your child to explore and create freely.</li>
                    <li>Be responsive to your child’s cues, adjusting activities based on their interest level.</li>
                </ol>
                <p style="font-size: 17px; margin-bottom: 60px">Remember, playtime is not just fun; it’s a crucial part of learning and development. Choose toys that inspire creativity, learning, and fun!</p>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card text-center sticky-top" style="width: 18rem; padding-top: 60px">
                <div class="card-body">
                    <h3 class="card-title">Explore Our Toy Collection</h3>
                    <p class="card-text" style="font-size: 17px">Discover delightful toys at our shop!</p>
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQt0QNJrR6Y0ifetdYukLVRaWrUFPgmgXcxFQoYOHbaYWbPpOXstsUONpvDqhtIKI1pt2m9geAp7PsjPWFYnYj0as4gc9Ijhm3Gu2TzWdg5&usqp=CAE" alt="" style="width:250px; margin-bottom: 15px">
                    <a href="{{route('user.view')}}" class="btn btn-primary " style="border-radius: 15px">Visit Shop</a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('UserView.Partial.footer')

@endsection
