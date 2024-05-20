// contact us map

function closeme() {
  if (jQuery("#products_display_mi").find(".col-md-4").length <= 0) {
    jQuery("#read-more-button").hide();
  } else {
    jQuery("#read-more-button").show();
  }
  if (jQuery(".no_more_products").length > 0) {
    jQuery("#read-more-button").hide();
  } else {
    jQuery("#read-more-button").show();
  }
}
jQuery(document).ready(function () {
  // media center page js

  jQuery(".popme_up_mi").on("click", function (e) {
    e.preventDefault();
    var currentdep = jQuery(this).attr("post_id");
    console.log(currentdep);
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "convert_pdf",
        depid: currentdep,
      },
      success: function (response) {
        console.log(response);
        jQuery("#currentpop").html(response);
        jQuery("#modal_id_post").trigger("click");
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error("Error generating PDF");
      },
    });
  });

  // jQuery("#productdownload_pdf").on("click", function (e) {
  //   var htmlContent = $("#pdf_div_wrapper").html();

  //   // Set the HTML content to the hidden input field
  //   $("#html-content").val(htmlContent);
  //   $("#pdf-form").trigger("submit");
  // });

  jQuery(".service_tabs_block").on("click", function (e) {
    jQuery(".service_tabs_block").removeClass("serv_active");
    jQuery(this).addClass("serv_active");
  });
  jQuery(".product_department_mi").on("click", function (e) {
    e.preventDefault();
    var currentdep = jQuery(this).attr("data-department");
    console.log(currentdep);
    var brandcheckedValues = [];
    $("#brands-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        brandcheckedValues.push($(this).val());
      }
    });
    var categories = [];
    $("#categories-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        categories.push($(this).val());
      }
    });
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "producttab",
        dep: currentdep,
        brands: brandcheckedValues,
        category: categories,
      },
      success: function (response) {
        console.log(response);
        jQuery("#products_display_mi").html(response);
        jQuery("#products_display_mi").css("height", "auto");
        closeme();
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error("Error generating PDF");
      },
    });
  });

  // reset buttons
  jQuery("#category_en_reset").on("click", function (e) {
    e.preventDefault();
    var container = document.getElementById("categories-checkboxes");

    // Get all checkboxes inside the container
    var checkboxes = container.querySelectorAll('input[type="checkbox"]');

    // Loop through each checkbox and uncheck it
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });

    var brandcheckedValues = [];

    // Loop through each checkbox
    $("#brands-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        brandcheckedValues.push($(this).val());
      }
    });
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "resetFilters",
        brandsdata: brandcheckedValues,
        categorydata: "",
      },
      success: function (response) {
        console.log(response);
        jQuery("#products_display_mi").html(response);
        jQuery("#products_display_mi").css("height", "auto");
        closeme();
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error("Error generating PDF");
      },
    });
  });

  // reset buttons
  jQuery("#brand_en_reset").on("click", function (e) {
    e.preventDefault();
    var container = document.getElementById("brands-checkboxes");

    // Get all checkboxes inside the container
    var checkboxes = container.querySelectorAll('input[type="checkbox"]');

    // Loop through each checkbox and uncheck it
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });

    var categoriescheckedValues = [];

    // Loop through each checkbox
    $("#categories-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        categoriescheckedValues.push($(this).val());
      }
    });
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "resetFilters",
        brandsdata: "",
        categorydata: categoriescheckedValues,
      },
      success: function (response) {
        console.log(response);
        jQuery("#products_display_mi").html(response);
        jQuery("#products_display_mi").css("height", "auto");
        closeme();
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error("Error generating PDF");
      },
    });
  });

  const checkboxes = jQuery(
    '#brands-checkboxes input[type="checkbox"], #categories-checkboxes input[type="checkbox"]'
  );
  let checkedValues = []; // Array to store checked values
  let barandsvalues = []; // Array to store checked values

  checkboxes.on("change", function () {
    if (this.checked) {
      console.log(jQuery(this).closest("#categories-checkboxes"));
      if (jQuery(this).closest("#categories-checkboxes").length > 0) {
        checkedValues.push(this.value);
        console.log("is clsoe");
      } else {
        barandsvalues.push(this.value);
      }
      // Add value to array if checked
    } else {
      if (jQuery(this).closest("#categories-checkboxes").length > 0) {
        const index = checkedValues.indexOf(this.value);
        if (index !== -1) {
          checkedValues.splice(index, 1); // Remove value from array if unchecked
        }
      } else {
        const index = barandsvalues.indexOf(this.value);
        if (index !== -1) {
          barandsvalues.splice(index, 1); // Remove value from array if unchecked
        }
      }
    }
    console.log("Checked values:", checkedValues);

    // Find the appropriate department value from the parent element or any other relevant element
    var currentdepartments = jQuery(".product_department_mi.is-checked").attr(
      "data-department"
    );
    console.log("Department:", currentdepartments);

    // Perform AJAX request when checkbox is checked or unchecked
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "catFilters",
        category: checkedValues,
        brands: barandsvalues,
        tabs: currentdepartments, // Pass checked values as comma-separated string
      },
      success: function (response) {
        console.log(response);
        jQuery("#products_display_mi").html(response);
        jQuery("#products_display_mi").css("height", "auto");
        closeme();
      },
      error: function (xhr, status, error) {
        console.error("Error generating PDF");
      },
    });
  });

  // if ($("#map").length > 0) {
  //   mapboxgl.accessToken =
  //     "pk.eyJ1IjoibG1jLW1pY3JvIiwiYSI6ImNscTR6bnVheTBld28yanBhYWhsanZ4YW4ifQ.hbYCxop6tcl06SEt8j0UoA";
  //     const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
  //     const initialZoom = 0.1; // Initial zoom level for both desktop and mobile
  //   const map = new mapboxgl.Map({
  //     container: "map",
  //     // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
  //     style: "mapbox://styles/mapbox/satellite-streets-v11",
  //     zoom: initialZoom,
  //     center: [30, 50],
  //     // pitch: 45, // Angle of the camera (0° is directly facing the map)
  //     // bearing: -30, // Rotation of the map (0° means North is up)
  //     projection: "globe",
  //   });

  //   map.on("load", () => {
  //     // Set the default atmosphere style
  //     // map.setFog({});
  //     map.rotateTo(180, { duration: 1000 });
  //         // If it's a desktop, zoom to 1.5
  //   if (!isMobile) {
  //     map.zoomTo(1.5, { duration: 6666 }); // Zoom to 1.5 over 1 second
  //   }
  //   // If it's a mobile, zoom to 1
  //   else {
  //     map.zoomTo(1, { duration: 6666 }); // Zoom to 1 over 1 second
  //   }
  //   var popup = new mapboxgl.Popup({ offset: 25}).setHTML(
  //     '<h3>Micro Details</h3>' +
  //     '<p>This is Testting Link . <a href="https://micro-details.com/">Click</a></p>'
  //   );
  //   var marker = new mapboxgl.Marker()
  //    .setLngLat([30, 50])
  //    .setPopup(popup)
  //    .addTo(map);
  //   });
  // }

  if ($("#map").length > 0) {
    mapboxgl.accessToken =
      "pk.eyJ1IjoibG1jLW1pY3JvIiwiYSI6ImNscTR6bnVheTBld28yanBhYWhsanZ4YW4ifQ.hbYCxop6tcl06SEt8j0UoA";
    const isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
    const initialZoom = 0.1; // Initial zoom level for both desktop and mobile
    const map = new mapboxgl.Map({
      container: "map",
      // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
      style: "mapbox://styles/mapbox/outdoors-v12",
      zoom: initialZoom,
      center: [30, 50],
      // pitch: 45, // Angle of the camera (0° is directly facing the map)
      // bearing: -30, // Rotation of the map (0° means North is up)
      projection: "globe",
      scrollZoom: false,
    });
    if (isMobile) {
      map.touchZoomRotate.disable();
    }

    map.on("load", () => {
      map.setPaintProperty("country-label", "text-opacity", 0); // Hide country labels
      map.setPaintProperty("admin-0-boundary", "line-opacity", 0); // Hide country boundaries
      // Set the default atmosphere style
      // map.setFog({});
      map.rotateTo(180, { duration: 1000 });
      // If it's a desktop, zoom to 1.5
      if (!isMobile) {
        map.zoomTo(1.3, { duration: 6666 }); // Zoom to 1.5 over 1 second
      }
      // If it's a mobile, zoom to 1
      else {
        map.zoomTo(0.8, { duration: 6666 }); // Zoom to 1 over 1 second
      }

      // Define marker data with different coordinates
      const markers = [
        {
          lngLat: [30, 50],
          name: "Office 1",
          link: "https://www.google.com/maps/@24.0918161,54.2742383,5z",
        },
        {
          lngLat: [20, 60],
          name: "Office 2",
          link: "https://www.google.com/maps/@24.0918161,54.2742383,5z",
        },
        {
          lngLat: [40, 70],
          name: "Office 3",
          link: "https://www.google.com/maps/@24.0918161,54.2742383,5z",
        },
        // Add more markers as needed
      ];

      // Loop through the marker data and create markers
      markers.forEach((markerData) => {
        // Create a custom HTML element for the marker with link
        var markerElement = document.createElement("div");
        markerElement.className = "custom-marker test";
        markerElement.innerHTML = `<a href="${markerData.link} "target="_blank">${markerData.name}</a>`;

        // Create the marker with the custom HTML element
        var marker = new mapboxgl.Marker(markerElement)
          .setLngLat(markerData.lngLat)
          .addTo(map);
      });
    });
  }
});

// if ($("#map").length > 0) {
//   mapboxgl.accessToken = "pk.eyJ1IjoibG1jLW1pY3JvIiwiYSI6ImNscTR6bnVheTBld28yanBhYWhsanZ4YW4ifQ.hbYCxop6tcl06SEt8j0UoA";
//   const map = new mapboxgl.Map({
//       container: "map",
//       // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
//       style: "mapbox://styles/mapbox/dark-v10", // Change the style to dark-v10 for black background
//       zoom: 1.5,
//       center: [30, 50],
//       pitch: 45, // Angle of the camera (0° is directly facing the map)
//       bearing: -30, // Rotation of the map (0° means North is up)
//       antialias: true // Smoother rendering
//   });

//   map.on("load", () => {
//       // Autorotate the globe
//       map.rotateTo(-30, { duration: 10000 });
//   });
// }

// jQuery(document).ready(function($) {
//   var offset = 0; // Initial offset, change if needed

//   $('#read-more-button').on('click', function() {
//       $.ajax({
//           url: '/wp-admin/admin-ajax.php', // WordPress AJAX URL
//           type: 'POST',
//           data: {
//               action: 'load_more_posts',
//               offset: offset,
//           },
//           success: function(response) {
//               // Append the new posts to your container
//               jQuery("#products_display_mi").append(response); // Use .append() instead of .html()
//               jQuery("#products_display_mi").css("height", "auto");
//               offset += 9; // Increment offset for next request
//           },
//           error: function(xhr, status, error) {
//               console.error(xhr.responseText);
//           }
//       });
//   });
// });

jQuery(document).ready(function ($) {
  var offset = 9; // Initial offset is 9

  $("#read-more-button").on("click", function () {
    var currentdep = $(".product_department_mi.is-checked").attr(
      "data-department"
    );
    var brandcheckedValues = [];
    $("#brands-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        brandcheckedValues.push($(this).val());
      }
    });
    var categories = [];
    $("#categories-checkboxes input[type='checkbox']").each(function () {
      // If checkbox is checked, store its value
      if ($(this).prop("checked")) {
        categories.push($(this).val());
      }
    });
    $.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: {
        action: "load_more_posts",
        depart: currentdep,
        category: categories,
        brands: brandcheckedValues,
        offset: offset,
      },
      success: function (response) {
        $("#products_display_mi").append(response); // Append the new posts
        $("#products_display_mi").css("height", "auto");
        closeme();
        offset += 9; // Increment offset for next request
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
      },
    });
  });
});

jQuery(document).ready(function ($) {
  // home hero slider
  var defcurrenindex = 0;
  jQuery("#teardropThumbsmobile")
    .find("img[current-index=" + defcurrenindex + "]")
    .addClass("currentactive_slide");
  var myCarousel = document.getElementById("teardropProducts");
  if (myCarousel) {
    myCarousel.addEventListener("slid.bs.carousel", function (e) {
      var lastClass = jQuery("#bg-teardrop").attr("class").split(" ").pop();
      jQuery("#bg-teardrop").removeClass(lastClass);

      var getActive = jQuery(".active", e.target).attr("data-border");
      var currenindex = jQuery(".active", e.target)
        .find("img")
        .attr("current-index");
      jQuery("#teardropThumbsmobile")
        .find("img")
        .removeClass("currentactive_slide");
      jQuery("#teardropThumbsmobile")
        .find("img[current-index=" + currenindex + "]")
        .addClass("currentactive_slide");

      jQuery("#bg-teardrop").addClass(getActive);
    });

    jQuery(".item-thumb a").each(function () {
      jQuery(this).on("click touch", function () {
        var getDataServ = jQuery(this).attr("data-thumb");
        console.log(getDataServ);

        jQuery(".service-items").removeClass("active");
        jQuery("#" + getDataServ + "").addClass(" active");
      });
    });
  }
  owlcarouselmaker("#teardropThumbs", "", ".prev-btn", 17, 5);
  owlcarouselmaker(
    "#product_dep_carousel",
    ".next-btn-ptk",
    ".prev-btn-ptk",
    1,
    1
  );

  slickslideroptcl("#teardropThumbsmobile");
  // owl carousel function
  function owlcarouselmaker(
    selector,
    nextbtn,
    prevbtn,
    deskslides,
    mobileslides
  ) {
    jQuery(selector).owlCarousel({
      loop: false,
      dots: false,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: mobileslides,
        },
        600: {
          items: deskslides,
        },
        1000: {
          items: deskslides,
        },
      },
    });
    var owl = jQuery(selector);
    owl.owlCarousel();
    if (nextbtn) {
      jQuery(nextbtn).click(function () {
        console.log(nextbtn);
        owl.trigger("next.owl.carousel");
      });
      jQuery(prevbtn).click(function () {
        owl.trigger("prev.owl.carousel");
      });
      jQuery(prevbtn).addClass("disabled");
      jQuery(owl).on("translated.owl.carousel", function (event) {
        if (jQuery(prevbtn).hasClass("disabled")) {
          jQuery(prevbtn).addClass("disabled");
        } else {
          jQuery(prevbtn).removeClass("disabled");
        }
        if (jQuery(nextbtn).hasClass("disabled")) {
          jQuery(nextbtn).addClass("disabled");
        } else {
          jQuery(nextbtn).removeClass("disabled");
        }
      });
    }
  }

  function slickslideroptcl(selector) {
    jQuery(selector).slick({
      arrows: false,
      dots: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      vertical: true,
      verticalSwiping: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: true,
            dots: true,
          },
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 4,
          },
        },
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ],
    });
    $(".slick-prev-btn").click(function () {
      $(selector).slick("slickPrev");
    });

    $(".slick-next-btn").click(function () {
      $(selector).slick("slickNext");
    });
    $(".slick-prev-btn").addClass("slick-disabled");
    $(selector).on("afterChange", function () {
      if ($(".slick-prev").hasClass("slick-disabled")) {
        $(".slick-prev-btn").addClass("slick-disabled");
      } else {
        $(".slick-prev-btn").removeClass("slick-disabled");
      }
      if ($(".slick-next").hasClass("slick-disabled")) {
        $(".slick-next-btn").addClass("slick-disabled");
      } else {
        $(".slick-next-btn").removeClass("slick-disabled");
      }
    });
  }
  // // mapboxgl.accessToken = 'pk.eyJ1IjoibG1jLW1pY3JvIiwiYSI6ImNscTR6bnVheTBld28yanBhYWhsanZ4YW4ifQ.hbYCxop6tcl06SEt8j0UoA';
  // const map = new mapboxgl.Map({
  //     container: 'map',
  //     // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
  //     style: 'mapbox://styles/mapbox/satellite-streets-v11',
  //     zoom: 1.5,
  //     center: [30, 50],
  //     projection: 'globe'
  // });

  // map.on('load', () => {
  //     // Set the default atmosphere style
  //     map.setFog({});
  // });

  // tabs js on media
  jQuery("#tabsbtns").on("click", "a.btn", function (e) {
    e.preventDefault();
    var idofsec = $(this).attr("data-sect");
    jQuery("#tabsbtns")
      .find("a")
      .each(function () {
        $(this).removeClass("active");
      });
    $(this).addClass("active");
    jQuery(".mitabs").hide();
    jQuery(`#${idofsec}`).show();
  });
  // Function to check if the device width is less than or equal to 768px
  function isMobileWidth() {
    return window.innerWidth <= 768;
  }
  function isElementInView(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }
  // Event listener for scroll, only on devices with width up to 768px
  if (isMobileWidth()) {
    window.addEventListener("scroll", function () {
      var elements = document.querySelectorAll(".floating_dtails_mi");
      elements.forEach(function (element) {
        if (isElementInView(element)) {
          // When an element with the class 'name' is in view, run the code
          console.log("yes");
          jQuery(".counter").countTo();
        }
      });
    });
  }

  if (window.innerWidth > 768) {
    //import LocomotiveScroll from 'locomotive-scroll';
    const scroll = new LocomotiveScroll({
      el: document.querySelector("[data-scroll-container]"),
      smooth: true,
      getDirection: true,
      reloadOnContextChange: true,
      lerp: 0.085,
      touchMultiplier: 2,
      smoothMobile: false,
      smartphone: {
        smooth: !0,
        breakpoint: 767,
      },
      tablet: {
        smooth: !1,
        breakpoint: 1024,
      },
    });
    // const options = {
    //   threshold: 0.5, // Change this threshold as needed
    // };

    // const observer = new IntersectionObserver((entries, observer) => {
    //   entries.forEach((entry) => {
    //     if (entry.isIntersecting) {
    //       // Element is in view
    //       animateImage();
    //     }
    //   });
    // }, options);

    // observer.observe(document.getElementById("servicesCarousel"));
    // let accumulatedRotation = 0;
    // let accumulatedScale = 1;
    // let accumulatedTranslateY = 0;

    // function animateImage() {
    //   let lastScrollTop = scroll.scroll.instance.scroll.y;

    //   scroll.on("scroll", (args) => {
    //     let scrollTop = args.scroll.y;

    //     // Calculate rotation angle based on scroll position
    //     let rotationAngle = (scrollTop - lastScrollTop) * 0.2;
    //     let scaleDelta = (scrollTop - lastScrollTop) * 0.001; // Adjust the multiplier for more significant scaling
    //     let translateY = (scrollTop - lastScrollTop) * 0.5; // Adjust the multiplier for more significant translation

    //     if(accumulatedScale <= 1){
    //       accumulatedScale -= scaleDelta;
    //       accumulatedRotation += rotationAngle;
    //     }else{
    //       accumulatedScale = 1;

    //     }

    //     jQuery(".carousel-item.posRel.active").find(".service-featured-img").css("transform", `rotate(${-accumulatedRotation}deg) scale(${accumulatedScale})`);

    //     lastScrollTop = scrollTop;

    //     // if (scrollTop > lastScrollTop) {
    //     //   // Scrolling down
    //     //   jQuery(".carousel-item.posRel.active").find(".service-featured-img").css("transform", `rotate(${rotationAngle}deg)`);
    //     //   // document.getElementById("scrollImage").style.transform =
    //     //   //   "rotate(45deg) scale(0.8)";
    //     // } else {
    //     //   // Scrolling up
    //     //   jQuery(".carousel-item.posRel.active").find(".service-featured-img").css("transform", "rotate(5deg) scale(1)");
    //     //   // document.getElementById("scrollImage").style.transform =
    //     //   //   "rotate(0deg) scale(1)";
    //     // }

    //     // lastScrollTop = scrollTop;
    //   });
    // }
    // if(jQuery("#filter-collapseOne")){
    //   const filterscroll= new LocomotiveScroll({
    //    el: document.querySelector("#filter-collapseOne"),
    //    smooth: true,
    //   });
    // }
    jQuery("#filter-collapseOne,#filter-collapseTwo").hover(
      function (e) {
        scroll.stop();
      },
      function (e) {
        scroll.start();
      }
    );
    new ResizeObserver(() => scroll.update()).observe(
      document.querySelector("[data-scroll-container]")
    );

    scroll.on("call", (obj) => {
      if (obj == "triggerCounter") {
        jQuery(".counter").countTo();
      }
    });

    const myCarousel = document.getElementById("servicesCarousel");

    if (myCarousel) {
      myCarousel.addEventListener("slid.bs.carousel", (event) => {
        scroll.update();
      });
    }
  }

  jQuery(".navbar-nav .nav-link").each(function () {
    jQuery(this).on("click touch", function () {
      jQuery(".navbar-nav .nav-link").removeClass("active");
      jQuery(this).addClass(" active");
    });
  });

  var container = jQuery(".grid");

  container.isotope({
    animationEngine: "best-available",
    itemSelector: ".element-item",
  });

  jQuery(".product-filter button").on("click", function () {
    var selector = jQuery(this).data("filter");
    container.isotope({
      filter: selector,
    });

    jQuery(".product-filter button").removeClass("is-checked");
    jQuery(this).addClass(" is-checked");
  });

  jQuery(".mc-item").each(function () {
    jQuery(this).on("mouseover", function () {
      jQuery(this).find(".top").removeClass("showThis");
      jQuery(this).find(".top").addClass("hideThis");
      jQuery(this).find(".bottom").removeClass("showThis");
      jQuery(this).find(".bottom").addClass("showThis");
      jQuery(this).find(".mc-caption").css("height", "100%");
    });

    jQuery(this).on("mouseleave", function () {
      jQuery(this).find(".top").removeClass("hideThis");
      jQuery(this).find(".top").addClass("showThis");
      jQuery(this).find(".bottom").removeClass("hideThis");
      jQuery(this).find(".bottom").addClass("showThis");
      jQuery(this).find(".mc-caption").css("height", "50%");
    });
  });
  // ********** Services Page Slider ***********
  jQuery("#services-slider").owlCarousel({
    loop: true,
    dots: false,
    responsiveClass: true,
    autoplay: true,
    navText: [
      "<i class='fa fa-chevron-left fnt-yellow fnt-30'></i>",
      "<i class='fa fa-chevron-right fnt-yellow fnt-30'></i>",
    ],
    nav: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      600: {
        items: 2,
        nav: true,
        margin: 20,
      },
      768: {
        items: 3,
        nav: true,
        margin: 20,
      },
      1000: {
        items: 3,
        nav: true,
        loop: true,
        margin: 20,
      },
    },
  });

  //jQuery('.grid').isotope();

  // init Isotope
  // var $grid = jQuery('.grid').isotope({
  //   itemSelector: '.element-item',
  //   layoutMode: 'fitRows'
  // });

  // // bind filter button click
  // jQuery('.filters-button-group').on( 'click', 'button', function() {
  //   var filterValue = jQuery( this ).attr('data-filter');
  //   // use filterFn if matches value
  //   filterValue = filterFns[ filterValue ] || filterValue;
  //   $grid.isotope({ filter: filterValue });
  // });
  // // change is-checked class on buttons
  // jQuery('.button-group').each( function( i, buttonGroup ) {
  //   var $buttonGroup = jQuery( buttonGroup );
  //   $buttonGroup.on( 'click', 'button', function() {
  //     $buttonGroup.find('.is-checked').removeClass('is-checked');
  //     jQuery( this ).addClass('is-checked');
  //   });
  // });

  // jQuery("#teardropProducts").owlCarousel({
  // 		// autoplay: true,
  // 		items: 1,
  // 	    loop:true,
  // 	    margin:10,
  // 	    responsiveClass:true,
  // 	    dots: false,
  // 	    responsive:{
  // 	        0:{
  // 	            items:1,
  // 	            nav:false
  // 	        },
  // 	        600:{
  // 	            items:1,
  // 	            nav:false
  // 	        },
  // 	        1000:{
  // 	            items:1,
  // 	            nav:false,
  // 	            loop:true
  // 	        }
  // 	    }
  // 	});
});
