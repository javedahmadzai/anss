!function(){"use strict";$(document).ready(function(){$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}}),$("#top-line").css({width:"100%",height:"2.5px",backgroundImage:"linear-gradient(to right, black, red, green)"}),$("#toggle").click(function(e){$("#toggle").toggleClass("toggle--change"),$("#navbar").slideToggle()})})}();