@extends('layouts.app')

@section('content')
<header class="container-fluid">
        <div class="row row-cols-1 row-cols-lg-2  vh-100">
            <div class="image-holder"> </div>
            <div class="text-holder p-5">
                <div class="dropdown d-flex justify-content-end">
                    <button class="btn btn-dark btn-lg btn-xl dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item " href="{{ route('login') }}">Login</a></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">Sign up</a></li>
                    </ul>
                </div>
                <div class="text-center text-container">
                    <h1 class="heading-text">Food<span class="text-amber">Hub</span></h1>
                    <p class="subtitle">Satisfy your Cravings in a Click!</p>
                </div>
            </div>
        </div>
    </header>

    <section class="container-fluid custom-section">
  <div class="row vh-100">
    <div class="text-holder p-5 custom-section">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2>What is Food<span class = "text-amber">Hub</span><span class ="hub2">?</span></h2>
          <p class="lead">Hello and welcome to FoodHub, the ultimate solution to your meal planning woes! Do you ever find yourself staring at your empty pantry or fridge, completely out of ideas for what to cook for your next meal? Or perhaps you're a student or worker living in a boarding house or dorm, struggling to come up with nutritious and delicious meal ideas with limited resources. Fear not, because FoodHub is here to save the day!</p>
          <p class="lead">FoodHub aims to provide a platform for anyone to easily be able to find restaurants and food stalls within Naga. FoodHub will allow the users to view the menu of the restaurant and eateries the user chooses. It will also allow users access to reviews on the different food available within the multiple restaurants and eateries within the city of Naga, this also allow them to leave suggestions on what to buy for others users to consider. Not only that, it will also provide locations in order for the user to easily find the restaurant or eatery.</p>
          <p class="lead">Our web application is specifically designed to cater to the needs of students and workers who are living away from home and are in need of some culinary inspiration. With features like a food menu, restaurant/eatery listings, recipe search and sharing, and user reviews and recommendations, you'll never run out of delicious meal ideas again.</p>
          <p class="lead">But that's not all - FoodHub is also open to non-student and non-working users who are looking for an easy and convenient way to plan their meals. Our weekly meal planner, nutritional information, and user profile and preferences make it easy to stay on track with your health and wellness goals.</p>
          <p class="lead">And not only are we here to help you, but we're also dedicated to supporting local businesses in Naga City, Camarines Sur. Our map integration and local business support feature make it easy for you to find and support your favorite restaurants and eateries in the area.</p>
          <p class="lead">So what are you waiting for? Sign up for FoodHub today and start exploring a world of delicious and nutritious meal ideas! </p>
          <h2 class = "about-us">About Us</h2>

          <div class="row">
            <div class="col-md-4 text-center">
              <img src="assets/adrey.jpg" alt="Owner 1" class="rounded-circle">
              <h3>Adrey John Rafallo</h3>
              <p>Co-founder and CEO</p>
            </div>
            <div class="col-md-4 text-center">
              <img src="assets/dimmie.jpg" alt="Owner 2" class="rounded-circle">
              <h3>Dimmie Luces</h3>
              <p>Co-founder and CEO</p>
            </div>
            <div class="col-md-4 text-center">
              <img src="assets/ryli.jpg" alt="Owner 3" class="rounded-circle">
              <h3>Ryann Philippe Balunso</h3>
              <p>Co-founder and CEO</p>

             
              </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
@endsection
