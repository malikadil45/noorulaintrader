$(document).ready(function () {
  // Your code here
  $("#addorderproduct").on("click", function () {
    // Show overlay and loading spinner
    $("#overlay").show();
    $(".lds-ring").show();
    try {
      var totalpieceorder = jQuery("#totalpieceorder").val();
      var totalboxorder = jQuery("#totalboxorder").val();
      var totalcatonorder = jQuery("#totalcatonorder").val();
      var pieceprice = jQuery("#pieceprice").val();
      var pricebox = jQuery("#pricebox").val();
      var errorSpanprice = $("#error-span-price");
      var errorSpanpieceprice = $("#error-span-piece-price");
      var errorSpanbox = $("#error-span-box");
      var errorSpanboxcaton = $("#error-span-box-caton");
      var errorSpanpiece = $("#error-span-piece");
      $("#error-div").hide();
      $("#success-div").hide();
      if (
        totalboxorder === "" &&
        totalcatonorder === "" &&
        totalpieceorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanbox.show();
        errorSpanbox.text("Please Enter the Value.");
        errorSpanboxcaton.show();
        errorSpanboxcaton.text("Please Enter the Value.");
        errorSpanpiece.show();
        errorSpanpiece.text("Please Enter the Value.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanbox.hide();
        errorSpanboxcaton.hide();
        errorSpanpiece.hide();
      }
      if (pieceprice === "" || pricebox === "") {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Product Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        totalpieceorder == "" &&
        totalboxorder !== "" &&
        totalcatonorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder === "" &&
        totalcatonorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanpieceprice.show();
        errorSpanpieceprice.text("Please Enter the Piece Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanpieceprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox !== "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice !== "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanpieceprice.show();
        errorSpanpieceprice.text("Please Enter the Piece Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanpieceprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder === ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanpieceprice.show();
        errorSpanpieceprice.text("Please Enter the Product Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanpieceprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        totalpieceorder === "" &&
        totalboxorder !== "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox !== "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice !== "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanpieceprice.show();
        errorSpanpieceprice.text("Please Enter the Piece Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanpieceprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder !== "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Product Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        totalpieceorder === "" &&
        totalboxorder === "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice !== "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder === "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanpieceprice.show();
        errorSpanpieceprice.text("Please Enter the Piece Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanpieceprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox !== "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder === "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Box Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      if (
        pieceprice === "0.00" &&
        pricebox === "0.00" &&
        totalpieceorder !== "" &&
        totalboxorder === "" &&
        totalcatonorder !== ""
      ) {
        // alert("Please fill in all required fields.");
        errorSpanprice.show();
        errorSpanprice.text("Please Enter the Product Price.");
        $("#overlay").hide();
        $(".lds-ring").hide();
        return;
      } else {
        errorSpanprice.hide();
      }

      var formData = $("form").serialize();

      $.ajax({
        type: "POST",
        url: addOrderProductURL,
        data: formData,
        dataType: "json",
        success: function (response) {
          // Show overlay and loading spinner
          $("#overlay").show();
          $(".lds-ring").show();
          // Handle the response, append new rows to the table outside the modal
          console.log(response);
          var error = response.data.error;
          console.log(error);
          if (error) {
            $("#overlay").hide();
            $(".lds-ring").hide();
            $("#error-div").text(error).show();
            setTimeout(function () {
              $("#error-div").hide();
            }, 4000); // Hide the loader after 2 seconds (2000 milliseconds)
          } else {
            var tableBody = $("#table-body");
            var totalbox = parseInt(response.data.totalboxorder, 10);
            var totalcatonorderform = parseInt(
              response.data.totalcatonorder,
              10
            );
            var boxpercaton = parseInt(response.data.boxpercaton, 10);
            var pieceperbox = parseInt(response.data.pieceperbox, 10);
            var totalpieceorder = parseInt(response.data.totalpieceorder, 10);
            var ordernumberramdon = parseInt(
              response.data.ordernumberramdon,
              10
            );
            var orderid = parseInt(response.data.ordernumberramdon, 10);
            var productid = parseInt(response.data.productlists, 10);
            var adilid = parseInt(response.data.adilid, 10);
            var catonquantity = parseInt(response.data.catonquantity, 10);
            var boxquantity = parseInt(response.data.boxquantity, 10);
            var piecequantity = parseInt(response.data.piecequantity, 10);
            console.log(adilid);
            console.log("catonquantity", catonquantity);
            console.log("boxquantity", boxquantity);
            console.log("piecequantity", piecequantity);

            console.log(ordernumberramdon);
            if (isNaN(totalbox)) {
              totalbox = 0;
            } else {
              totalboxorder = totalbox * pieceperbox;
            }
            if (isNaN(totalpieceorder)) {
              totalpieceorder = 0;
            }

            // Check if totalcatonorder is NaN and set it to 0 if it is
            if (isNaN(totalcatonorderform)) {
              totalcatonorderform = 0;
            } else {
              totalcatonorder = totalcatonorderform * boxpercaton;
            }
            var totalboxfinal = totalcatonorder + totalbox;
            var totalpiecefinal1 = (totalcatonorder + totalbox) * pieceperbox;
            var totalpiecefinal2 = totalcatonorder * pieceperbox;
            var totalpiecefinal = totalboxorder + totalpieceorder;
            var final = totalpiecefinal1 + totalpieceorder;
            var final2 = totalpiecefinal2 + totalpieceorder;
            console.log(totalboxfinal);
            console.log(totalpiecefinal);
            console.log(final);
            //var totalunits = totalcatonorder + totalbox;

            // if (totalcatonorderform == 0 && totalbox == 0) {
            //   var priceshow = response.data.pricebox;
            // } else if (totalcatonorderform == 0 && totalbox !== 0) {
            //   var priceshow = response.data.pieceprice;
            // }else {
            //   var priceshow = response.data.pricebox;
            // }
            var pieceprice = response.data.pieceprice;
            var pricebox = response.data.pricebox;

            if (totalcatonorderform == 0 && totalbox == 0) {
              var total = (totalpiecefinal * pricebox).toFixed(2);
            } else if (
              totalpieceorder !== 0 &&
              totalbox !== 0 &&
              totalcatonorderform == 0
            ) {
              var total = (totalpiecefinal * pricebox).toFixed(2);
            } else if (
              totalpieceorder !== 0 &&
              totalbox == 0 &&
              totalcatonorderform !== 0
            ) {
              var total = (final2 * pricebox).toFixed(2);
            } else if (
              totalpieceorder !== 0 &&
              totalbox !== 0 &&
              totalcatonorderform !== 0
            ) {
              var total = (final * pricebox).toFixed(2);
            } else {
              var total = (totalboxfinal * pieceprice).toFixed(2);
            }

            //Remember that toFixed returns a string, so if you need to perform further arithmetic operations with this
            // value, you might need to convert it back to a number using parseFloat:
            //var total = parseFloat((totalboxfinal * pieceprice).toFixed(2));

            // Add new row to the table
            var newRow =
              "<tr class='table-row'>" +
              "<td data-product-id='" +
              productid +
              "'  data-order-id='" +
              orderid +
              "'  data-id='" +
              adilid +
              "'>" + // Store product ID as a data attribute
              response.data.productname +
              "</td>" +
              "<td>";
            if (totalcatonorderform !== 0 && totalbox == 0) {
              newRow += totalcatonorderform + " Caton <br>";
            }
            if (totalcatonorderform !== 0 && totalbox !== 0) {
              newRow +=
                totalcatonorderform + " Caton <br>" + totalbox + " Box <br>";
            }

            if (
              totalpieceorder !== 0 &&
              totalbox !== 0 &&
              totalcatonorderform == 0
            ) {
              newRow +=
                totalbox + " Box <br>" + totalpieceorder + " Piece <br>";
            } else if (totalbox !== 0 && totalcatonorderform == 0) {
              newRow += totalbox + " Box <br>";
            } else if (totalpieceorder !== 0) {
              newRow += totalpieceorder + " Piece";
            }

            newRow += "</td>" + "<td>";
            if (totalcatonorderform !== 0 && totalbox == 0) {
              newRow += pieceprice + " / Box <br>";
            }
            if (
              totalcatonorderform !== 0 &&
              totalbox !== 0 &&
              totalpieceorder == 0
            ) {
              newRow += pieceprice + " / Box <br>";
            }

            if (
              totalpieceorder !== 0 &&
              totalbox !== 0 &&
              totalcatonorderform == 0
            ) {
              newRow += pieceprice + " / Box <br>" + pricebox + " / Piece <br>";
            } else if (
              totalpieceorder !== 0 &&
              totalbox !== 0 &&
              totalcatonorderform !== 0
            ) {
              newRow += pieceprice + " / Box <br>" + pricebox + " / Piece <br>";
            } else if (totalbox !== 0 && totalcatonorderform == 0) {
              newRow += pieceprice + " / Box <br>";
            } else if (totalpieceorder !== 0) {
              newRow += pricebox + " / Piece <br>";
            }
            newRow +=
              "</td>" +
              "<td>" +
              total +
              "</td>" +
              "<td><i class='fa-solid fa-trash delete-button'></i></td>" +
              "</tr>";
            tableBody.append(newRow);

            // Initialize a variable to store the cumulative total
            var cumulativeTotal = 0;

            // Iterate through each row in the table
            $("#table-body .table-row").each(function () {
              var row = $(this);

              // Find the second last cell in the row and get its text
              var secondLastCell = row.find("td:nth-last-child(2)");
              var secondLastValue =
                parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

              // Add the second last value to the cumulative total
              cumulativeTotal += secondLastValue;
            });
            var advance = parseFloat($("#advance").text()) || 0;
            var discountamount1 = parseFloat($("#discountamount").text()) || 0;

            // Update the cumulative total div with the cumulative total
            $("#cumulative-gross-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
            $("#totalamount").val(cumulativeTotal.toFixed(2)); // Display with two decimal places
            $("#catonquantity").text(catonquantity);
            $("#boxquantity").text(boxquantity);
            $("#piecequantity").text(piecequantity);
            var advance = parseFloat($("#advance").text()) || 0;
            var discountamount1 = parseFloat($("#discountamount").text()) || 0;
            if (advance !== 0 || discountamount1 !== 0) {
              var cumulativeTotal = cumulativeTotal - advance - discountamount1;
              $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
            } else {
              $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
            }

            // Clear the input fields after adding
            $("form")[0].reset();

            // Close the modal
            //$("#modal-add-product").modal("hide");
            setTimeout(function () {
              $("#overlay").hide();
              $(".lds-ring").hide();
            }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
          }
        },
        error: function (errorThrown) {
          console.error(errorThrown);
        },
      });

      // Code to run when the button is clicked
      var totalpieceorder = jQuery("#totalpieceorder").val();
      var totalboxorder = jQuery("#totalboxorder").val();
      var pieceprice = jQuery("#pieceprice").val();
      var totalcatonorder = jQuery("#totalcatonorder").val();
      var productlists = jQuery("#productlists").val();
      console.log(pieceprice, totalpieceorder, totalboxorder);
      //$("form")[0].reset();

      $("#productlists").val(null).trigger("change");

      $("#totalcatonorder").val("");
      $("#totalboxorder").val("");
      $("#totalpieceorder").val("");
      $("#pieceprice").val("");
      $("#pricebox").val("");
      $("#todaycaton").val("");
      $("#salepiece").val("");
      $("#remainingPieces").val("");
      compareInputs();
      compareInputscaton();
      compareInputspiece();
      // setTimeout(function () {
      //   $("#overlay").hide();
      //   $(".lds-ring").hide();
      // }, 2000); // Hide the loader after 2 seconds (2000 milliseconds)
    } catch (error) {
      // Show error message
      console.error(error);
      // You can display an error message to the user here
      setTimeout(function () {
        $("#overlay").hide();
        $(".lds-ring").hide();
      }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
    }

    // finally {
    //   setTimeout(function () {
    //     $("#overlay").hide();
    //     $(".lds-ring").hide();
    //   }, 2000); // Hide the loader after 2 seconds (2000 milliseconds)
    // }
  });

  //=================================================================================

  // Save Price with modal in add product item

  $("#saveshopkeeperprice").on("click", function () {
    var boxprice = jQuery("#boxprice").val();
    var errorSpanboxprice = $("#error-span-box-price");
    if (boxprice === "") {
      // alert("Please fill in all required fields.");
      errorSpanboxprice.show();
      errorSpanboxprice.text("Please Enter the Price.");
      return;
    } else {
      errorSpanboxprice.hide();
    }
    // e.preventDefault(); // Prevent the default form submission
    var formData = $("form").serialize();

    $.ajax({
      type: "POST",
      url: addproductprice,
      data: formData,
      dataType: "json",
      success: function (response) {
        console.log(response.responseText);
        var success = response.success;
        var error = response.error;
        //$("#error-already-price").text(response.error);

        if (success) {
          $("#success-div").text(success).show();
          $("#error-div").hide();
          setTimeout(function () {
            $("#success-div").hide();
          }, 3000); // 3000 milliseconds (3 seconds)
        }

        if (error) {
          $("#error-div").text(error).show();
          $("#success-div").hide();
          setTimeout(function () {
            $("#error-div").hide();
          }, 3000); // 3000 milliseconds (3 seconds)
        }
      },
      error: function (errorThrown) {
        console.error(errorThrown);
      },
    });
    $("#boxprice").val("");
    $("#pricepiece").val("");
  });

  //=================================================================================

  //=================================================================================

  // update Price with modal in add product item

  $("#edithopkeeperprice").on("click", function () {
    var editboxprice = jQuery("#editboxprice").val();
    var errorSpaneditboxprice = $("#error-span-edit-box-price");
    if (editboxprice === "") {
      // alert("Please fill in all required fields.");
      errorSpaneditboxprice.show();
      errorSpaneditboxprice.text("Please Enter the Price.");
      return;
    } else {
      errorSpaneditboxprice.hide();
    }
    // e.preventDefault(); // Prevent the default form submission
    var formData = $("form").serialize();

    $.ajax({
      type: "POST",
      url: edithopkeeperprice,
      data: formData,
      dataType: "json",
      success: function (response) {
        console.log(response);
        console.log("adil in after update button click");
        var success = response.success;
        var error = response.error;
        //$("#error-already-price").text(response.error);

        if (success) {
          $("#edit-success-div").text(success).show();
          $("#edit-error-div").hide();
          setTimeout(function () {
            $("#edit-success-div").hide();
          }, 3000); // 3000 milliseconds (3 seconds)
        }

        if (error) {
          $("#edit-error-div").text(error).show();
          $("#edit-success-div").hide();
          setTimeout(function () {
            $("#edit-error-div").hide();
          }, 3000); // 3000 milliseconds (3 seconds)
        }
      },
      error: function (errorThrown) {
        console.error(errorThrown);
      },
    });
    $("#editboxprice").val("");
    $("#editpricepiece").val("");
  });

  //=================================================================================

  $("#table-body").on("click", ".delete-button", function () {
    var productid = $(this)
      .closest("tr")
      .find("td[data-product-id]")
      .data("product-id");

    var orderid = $(this)
      .closest("tr")
      .find("td[data-order-id]")
      .data("order-id");

    var id = $(this).closest("tr").find("td[data-id]").data("id");

    console.log("This is Click Id:" + productid);
    console.log("This is Click Id:" + orderid);

    $.ajax({
      method: "POST",
      url: deleteorderproduct, // Use the retrieved URL
      data: {
        productid: productid,
        orderid: orderid,
        id: id,
      },
      dataType: "json",
      success: function (response) {
        console.log(response);
        $("#catonquantity").text(""); // Display 0 if parsing fails
        $("#boxquantity").text(""); // Display 0 if parsing fails
        $("#piecequantity").text(""); // Display 0 if parsing fails
        var data = response.data; // Assign response data or an empty object if 'data' is undefined

        var catonquantity = parseInt(data.catonquantity, 10);
        var boxquantity = parseInt(data.boxquantity, 10);
        var piecequantity = parseInt(data.piecequantity, 10);

        $("#catonquantity").text(catonquantity || 0); // Display 0 if parsing fails
        $("#boxquantity").text(boxquantity || 0); // Display 0 if parsing fails
        $("#piecequantity").text(piecequantity || 0); // Display 0 if parsing fails
      },
      error: function (errorThrown) {
        console.error(errorThrown);
      },
    });

    $(this).closest("tr").remove();
    var cumulativeTotal = 0;

    // Iterate through each row in the table
    $("#table-body .table-row").each(function () {
      var row = $(this);

      // Find the second last cell in the row and get its text
      var secondLastCell = row.find("td:nth-last-child(2)");
      var secondLastValue = parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

      // Add the second last value to the cumulative total
      cumulativeTotal += secondLastValue;
    });

    // Update the cumulative total div with the cumulative total
    $("#cumulative-gross-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
    $("#totalamount").val(cumulativeTotal.toFixed(2)); // Display with two decimal places
    var advance = parseFloat($("#advance").text()) || 0;
    var discountamount1 = parseFloat($("#discountamount").text()) || 0;
    if (advance !== 0 || discountamount1 !== 0) {
      var cumulativeTotal = cumulativeTotal - advance - discountamount1;
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
    } else {
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
    }
  });

  //=================================================================================

  $("#recevivedamount").on("blur", function () {
    var receivedAmount = parseFloat($(this).val()) || 0; // Default to 0 if parsing fails
    var advance = parseFloat($("#advance").text());
    if (receivedAmount !== 0 && receivedAmount !== advance) {
      // Get the value from the "Credit Amount" input field
      console.log("payment received");
      var cumulativeTotal = parseFloat($("#cumulative-total").text()) || 0;
      // Subtract the received amount from the cumulative total
      cumulativeTotal -= receivedAmount;

      // Update the cumulative total div with the cumulative total
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
      $("#advance").text(receivedAmount.toFixed(2)); // Display with two decimal places
    }
  });

  $("#recevivedamount").on("keydown", function () {
    var cumulativeTotal = 0;
    var receivedAmount = "";
    var discountamount = parseFloat($("#discountamount").text()) || 0;
    if (discountamount !== 0) {
      $("#table-body .table-row").each(function () {
        var row = $(this);

        // Find the second last cell in the row and get its text
        var secondLastCell = row.find("td:nth-last-child(2)");
        var secondLastValue = parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

        // Add the second last value to the cumulative total
        cumulativeTotal += secondLastValue;
      });

      var cumulativeTotal = cumulativeTotal - discountamount;

      // Update the cumulative total div with the cumulative total
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
      $("#discountamount").text(discountamount.toFixed(2)); // Display with two decimal places\
      $("#advance").text(receivedAmount); // Display with two decimal places
    } else {
      // Iterate through each row in the table
      $("#table-body .table-row").each(function () {
        var row = $(this);

        // Find the second last cell in the row and get its text
        var secondLastCell = row.find("td:nth-last-child(2)");
        var secondLastValue = parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

        // Add the second last value to the cumulative total
        cumulativeTotal += secondLastValue;
      });
    }

    // Update the cumulative total div with the cumulative total
    $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
    $("#advance").text(receivedAmount); // Display with two decimal places
  });

  //=================================================================================

  $("#discount").on("blur", function () {
    var discountamount = parseFloat($(this).val()) || 0; // Default to 0 if parsing fails
    var discountamount1 = parseFloat($("#discountamount").text());
    if (discountamount !== 0 && discountamount !== discountamount1) {
      // Get the value from the "Credit Amount" input field
      console.log("Discount Ammount");
      var cumulativeTotal = parseFloat($("#cumulative-total").text()) || 0;
      // Subtract the received amount from the cumulative total
      cumulativeTotal -= discountamount;

      // Update the cumulative total div with the cumulative total
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
      $("#discountamount").text(discountamount.toFixed(2)); // Display with two decimal places
    }
  });

  $("#discount").on("keydown", function () {
    var cumulativeTotal = 0;
    var discountamount = "";

    var advance = parseFloat($("#advance").text()) || 0;
    var grosstotal = parseFloat($("#cumulative-gross-total").text()) || 0;
    var totalamount = parseFloat($("#totalamount").val()) || 0;
    console.log(advance);
    console.log(grosstotal);
    var cumulativeTotal = grosstotal - advance;
    console.log(cumulativeTotal);

    // Update the cumulative total div with the cumulative total
    $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
    $("#discountamount").text(discountamount); // Display with two decimal places
  });

  //=================================================================================

  $("#wayofpayment").on("change", function () {
    var wayofpayment = $("#wayofpayment").val();
    if (wayofpayment == 1) {
      $("#cumulative-total-heading").text("Net Total:"); // Display with two decimal places

      var cumulativeTotal = 0;
      var receivedAmount = "";
      var discountamount = parseFloat($("#discountamount").text()) || 0;
      if (discountamount !== 0) {
        $("#table-body .table-row").each(function () {
          var row = $(this);

          // Find the second last cell in the row and get its text
          var secondLastCell = row.find("td:nth-last-child(2)");
          var secondLastValue = parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

          // Add the second last value to the cumulative total
          cumulativeTotal += secondLastValue;
        });

        var cumulativeTotal = cumulativeTotal - discountamount;

        // Update the cumulative total div with the cumulative total
        $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
        $("#discountamount").text(discountamount.toFixed(2)); // Display with two decimal places\
        $("#advance").text(receivedAmount); // Display with two decimal places
      } else {
        // Iterate through each row in the table
        $("#table-body .table-row").each(function () {
          var row = $(this);

          // Find the second last cell in the row and get its text
          var secondLastCell = row.find("td:nth-last-child(2)");
          var secondLastValue = parseFloat(secondLastCell.text().trim()) || 0; // Default to 0 if parsing fails

          // Add the second last value to the cumulative total
          cumulativeTotal += secondLastValue;
        });
      }

      // Update the cumulative total div with the cumulative total
      $("#cumulative-total").text(cumulativeTotal.toFixed(2)); // Display with two decimal places
      $("#advance").text(receivedAmount); // Display with two decimal places

      $("#recevivedamount").val(""); // Display with two decimal places
      $("#wayofpaymnet").text("Payment:"); // Display with two decimal places
      $("#advance").text("Cash"); // Display with two decimal places
    } else {
      $("#cumulative-total-heading").text("Balance:"); // Display with two decimal places
      $("#wayofpaymnet").text("Advance:"); // Display with two decimal places
      $("#advance").text(""); // Display with two decimal places
    }
  });

  //=================================================================================

  $("#productlists").on("change", function () {
    // Show overlay and loading spinner
    $("#overlay").show();
    $(".lds-ring").show();
    try {
      var errorSpanprice = $("#error-span-price");
      var errorSpanpieceprice = $("#error-span-piece-price");
      errorSpanbox.hide();
      errorSpanboxcaton.hide();
      errorSpanpiece.hide();
      errorSpanprice.hide();
      errorSpanpieceprice.hide();
      $("#totalcatonorder").val("");
      $("#totalboxorder").val("");
      $("#totalpieceorder").val("");
      $("#pieceprice").val("");
      $("#pricebox").val("");
      $("#todaycaton").val("");
      $("#salepiece").val("");
      $("#remainingPieces").val("");
      compareInputs();
      compareInputscaton();
      compareInputspiece();
      var productlists = $("#productlists").val();
      var shopkeeper_id = $("#shopkeeper_id").val();
      var ajaxUrl = $("#productlists option:selected").data("ajax-url"); // Retrieve the data-ajax-url attribute
      var ajaxUrlprice = $("#productlists option:selected").data(
        "ajax-url-price"
      ); // Retrieve the data-ajax-url attribute

      console.log(productlists);
      console.log(shopkeeper_id);

      $.ajax({
        method: "POST",
        url: ajaxUrl, // Use the retrieved URL
        data: {
          productlists: productlists,
        },
        success: function (response) {
          // Show overlay and loading spinner
          $("#overlay").show();
          $(".lds-ring").show();
          // Split the response by newline character (<br>) to separate JSON and additional content
          var parts = response.split("<br>");

          // Check if there are at least two parts
          if (parts.length >= 2) {
            // Try to parse the last part as JSON
            var jsonPart = parts[parts.length - 1].trim();
            var jsonData;

            try {
              jsonData = JSON.parse(jsonPart);
            } catch (e) {
              console.error("Failed to parse JSON:", e);
            }

            // Check if the parsed JSON is an array
            if (Array.isArray(jsonData)) {
              var remainingData = jsonData[0];

              console.log(remainingData);

              var todaystockfinal = remainingData.remainingCaton;
              var todaycatonfinal = remainingData.remainingBox;
              var todaypiecefinal = remainingData.remainingPieces;
              var remainingboxcompare = remainingData.remainingboxcompare;
              var remainingpiececompare = remainingData.remainingpiececompare;
              var boxPerCaton = remainingData.boxPerCaton;
              var piecesPerBox = remainingData.piecesPerBox;

              var errorSpan = $("#error-span");
              var addorderproduct = $("#addorderproduct");

              if (
                todaystockfinal === null &&
                todaycatonfinal === null &&
                todaypiecefinal === null
              ) {
                addorderproduct.hide();
                errorSpan.show();
                errorSpan.text("Please add the stock of this product.");
                $("#salepiece").val(remainingData.remainingBox);
                $("#todaycaton").val(remainingData.remainingCaton);
                $("#remainingPieces").val(remainingData.remainingPieces);
                $("#remainingpiececompare").val(
                  remainingData.remainingpiececompare
                );
                $("#remainingboxcompare").val(
                  remainingData.remainingboxcompare
                );
                $("#boxPerCaton").val(boxPerCaton);
                $("#piecesPerBox").val(piecesPerBox);
              } else {
                addorderproduct.show();
                errorSpan.hide();
                errorSpan.hide();
                $("#salepiece").val(remainingData.remainingBox);
                $("#todaycaton").val(remainingData.remainingCaton);
                $("#remainingPieces").val(remainingData.remainingPieces);
                $("#remainingpiececompare").val(
                  remainingData.remainingpiececompare
                );
                $("#remainingboxcompare").val(
                  remainingData.remainingboxcompare
                );
                $("#boxPerCaton").val(boxPerCaton);
                $("#piecesPerBox").val(piecesPerBox);
              }
            }
          }
          setTimeout(function () {
            $("#overlay").hide();
            $(".lds-ring").hide();
          }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
        },
        error: function (errorThrown) {
          console.error(errorThrown);
        },
      });

      $.ajax({
        method: "POST",
        url: ajaxUrlprice, // Use the retrieved URL
        data: {
          productlists: productlists,
          shopkeeper_id: shopkeeper_id,
        },
        success: function (response) {
          // Show overlay and loading spinner
          $("#overlay").show();
          $(".lds-ring").show();
          console.log(response);
          var productprice = response.productprice;

          if (productprice == null) {
            // Handle the case where productprice is null
            $("#pieceprice").val("");
            $("#pricebox").val("");

            $("#editboxprice").val("");
            $("#editpricepiece").val("");
          } else if (
            productprice.hasOwnProperty("boxprice") ||
            productprice.hasOwnProperty("pieceprice")
          ) {
            // Check if 'price' property exists before accessing it
            $("#pieceprice").val(productprice.boxprice);
            $("#pricebox").val(productprice.pieceprice);

            $("#editboxprice").val(productprice.boxprice);
            $("#editpricepiece").val(productprice.pieceprice);
          } else {
            // Handle other cases where 'price' property doesn't exist
            $("#pieceprice").val("");
            $("#pricebox").val("");

            $("#editboxprice").val("");
            $("#editpricepiece").val("");
          }
          setTimeout(function () {
            $("#overlay").hide();
            $(".lds-ring").hide();
          }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
        },
        error: function (errorThrown) {
          console.error(errorThrown);
        },
      });
    } catch (error) {
      // Show error message
      console.error(error);
      // You can display an error message to the user here
      setTimeout(function () {
        $("#overlay").hide();
        $(".lds-ring").hide();
      }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
    }

    // finally {
    //   setTimeout(function () {
    //     $("#overlay").hide();
    //     $(".lds-ring").hide();
    //   }, 1000); // Hide the loader after 2 seconds (2000 milliseconds)
    // }
  });

  var input1 = $("#remainingboxcompare");
  var input2 = $("#totalboxorder");

  var input3 = $("#todaycaton");
  var input4 = $("#totalcatonorder");

  var input5 = $("#remainingpiececompare");
  var input6 = $("#totalpieceorder");

  var boxPerCaton = $("#boxPerCaton");
  var piecesPerBox = $("#piecesPerBox");

  var remainingBox = $("#salepiece");
  var remainingPieces = $("#remainingPieces");

  // Define the phonenumber variable
  var phonenumber = $("#phonenumber");
  var saveshopkeeper = $("#saveshopkeeper");
  var errorSpanbox = $("#error-span-box");
  var errorSpanpiece = $("#error-span-piece");
  var resultsucess = $("#resultsucess");
  var resultsucesscaton = $("#resultsucesscaton");
  var resultsucesspiece = $("#resultsucesspiece");
  var resultwrong = $("#resultwrong");
  var resultwrongcaton = $("#resultwrongcaton");
  var resultwrongpiece = $("#resultwrongpiece");
  var resultremainpiece = $("#resultremainpiece");
  var correntnumber = $("#correntnumber");
  var wrongnumber = $("#wrongnumber");
  var addorderproduct = $("#addorderproduct");
  var errorSpanboxcaton = $("#error-span-box-caton");

  // Attach a keyup event handler to input2
  input2.on("keyup", function () {
    compareInputs();
  });

  input4.on("keyup", function () {
    compareInputscaton();
  });

  input6.on("keyup", function () {
    compareInputspiece();
  });

  // Attach a keyup event handler to phonenumber
  phonenumber.on("keyup", function () {
    comparephonenumber();
  });

  function compareInputs() {
    var value1 = input1.val();
    var value2 = input2.val();

    // Convert value2 to a number
    var numericValue2 = parseFloat(value2);

    var value3 = input3.val();
    var value4 = input4.val();

    // Convert value2 to a number
    var numericValue4 = parseFloat(value4);

    var value5 = input5.val();
    var value6 = input6.val();

    // Convert value2 to a number
    var numericValue6 = parseFloat(value6);

    if (!isNaN(numericValue2) && numericValue2 <= value1) {
      resultsucess.show();
      // Create the <i> element and set its attributes
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-check fa-beat fa-lg")
        .css("color", "#2b6313");

      // Replace the text with the <i> element
      resultsucess.html(checkIcon);
      resultwrong.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();
      if (
        (!isNaN(numericValue4) && numericValue4 > value3) ||
        (!isNaN(numericValue6) && numericValue6 > value5)
      ) {
        addorderproduct.hide();
      } else {
        addorderproduct.show();
      }

      errorSpanboxcaton.hide();
    } else {
      resultwrong.show();
      // resultwrong.text("You add the wrong Value");
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-xmark fa-beat fa-lg")
        .css("color", "#ff2600");

      // Replace the text with the <i> element
      resultwrong.html(checkIcon);
      resultsucess.hide();
      addorderproduct.hide();

      errorSpanboxcaton.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();
    }
    // Check if input2 is empty and hide the spans if it is
    if (value2 === "") {
      resultwrong.hide();
      resultsucess.hide();
      if (
        (!isNaN(numericValue4) && numericValue4 > value3) ||
        (!isNaN(numericValue6) && numericValue6 > value5)
      ) {
        addorderproduct.hide();
      } else if (value4 === "" || value6 === "") {
        addorderproduct.show();
      } else {
        addorderproduct.hide();
      }
    }
  }

  function compareInputscaton() {
    var value1 = input1.val();
    var value2 = input2.val();

    // Convert value2 to a number
    var numericValue2 = parseFloat(value2);

    var value3 = input3.val();
    var value4 = input4.val();

    // Convert value2 to a number
    var numericValue4 = parseFloat(value4);

    var value5 = input5.val();
    var value6 = input6.val();

    // Convert value2 to a number
    var numericValue6 = parseFloat(value6);

    if (!isNaN(numericValue4) && numericValue4 <= value3) {
      resultsucesscaton.show();
      // resultsucesscaton.text("Great..");
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-check fa-beat fa-lg")
        .css("color", "#2b6313");

      // Replace the text with the <i> element
      resultsucesscaton.html(checkIcon);
      resultwrongcaton.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();

      if (
        (!isNaN(numericValue2) && numericValue2 > value1) ||
        (!isNaN(numericValue6) && numericValue6 > value5)
      ) {
        addorderproduct.hide();
      } else {
        addorderproduct.show();
      }
      errorSpanboxcaton.hide();
    } else {
      resultwrongcaton.show();
      // resultwrongcaton.text("You add the wrong Value");
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-xmark fa-beat fa-lg")
        .css("color", "#ff2600");

      // Replace the text with the <i> element
      resultwrongcaton.html(checkIcon);
      resultsucesscaton.hide();
      addorderproduct.hide();

      errorSpanboxcaton.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();
    }
    // Check if input2 is empty and hide the spans if it is
    if (value4 === "") {
      resultwrongcaton.hide();
      resultsucesscaton.hide();
      if (
        (!isNaN(numericValue2) && numericValue2 > value1) ||
        (!isNaN(numericValue6) && numericValue6 > value5)
      ) {
        addorderproduct.hide();
      } else if (value2 === "" || value6 === "") {
        addorderproduct.show();
      } else {
        addorderproduct.hide();
      }
    }
  }

  function compareInputspiece() {
    var value1 = input1.val();
    var value2 = input2.val();

    // Convert value2 to a number
    var numericValue2 = parseFloat(value2);

    var value3 = input3.val();
    var value4 = input4.val();

    // Convert value4 to a number
    var numericValue4 = parseFloat(value4);
    var remainingBox1 = parseFloat(remainingBox.val());
    console.log("numericValue2:", numericValue2);
    console.log("remainingBox:", remainingBox1);
    console.log("numericValue4:", numericValue4);
    console.log("value3:", value3);
    console.log("remainingPieces:", remainingPieces);
    if (value2 === "" && value4 === "") {
      var value5 = input5.val();
    } else if (numericValue2 == remainingBox1 && numericValue4 == value3) {
      var value5 = parseFloat(remainingPieces.val());
      console.log("adil in console");
    } else if (value2 == "" || value4 == "") {
      // Check if value2 is an empty string or not
      if (value2 === "") {
        value2 = 0; // Set value2 to 0 if it's empty
      }

      // Check if value4 is an empty string or not
      if (value4 === "") {
        value4 = 0; // Set value4 to 0 if it's empty
      }

      var box = parseFloat(value2) * piecesPerBox.val();
      var caton1 = parseFloat(value4) * boxPerCaton.val();
      var caton = caton1 * piecesPerBox.val();
      var totalpiece = box + caton;
      var input51 = input5.val();
      var value5 = input51 - totalpiece;
      console.log(value5);
      console.log(value2);
      console.log(value4);
    } else if (numericValue2 !== remainingBox1 || numericValue4 !== value3) {
      // Check if value2 is an empty string or not
      if (value2 === "") {
        value2 = 0; // Set value2 to 0 if it's empty
      }

      // Check if value4 is an empty string or not
      if (value4 === "") {
        value4 = 0; // Set value4 to 0 if it's empty
      }

      var box = parseFloat(value2) * piecesPerBox.val();
      var caton1 = parseFloat(value4) * boxPerCaton.val();
      var caton = caton1 * piecesPerBox.val();
      var totalpiece = box + caton;
      var input51 = input5.val();
      var value5 = input51 - totalpiece;
      console.log(value5);
      console.log(value2);
      console.log(value4);
    }
    var value6 = input6.val();

    // Convert value2 to a number
    var numericValue6 = parseFloat(value6);

    if (!isNaN(numericValue6) && numericValue6 <= value5) {
      resultsucesspiece.show();
      // resultsucesspiece.text("Great..");
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-check fa-beat fa-lg")
        .css("color", "#2b6313");

      // Replace the text with the <i> element
      resultsucesspiece.html(checkIcon);
      resultwrongpiece.hide();
      resultremainpiece.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();
      if (
        (!isNaN(numericValue4) && numericValue4 > value3) ||
        (!isNaN(numericValue2) && numericValue2 > value1)
      ) {
        addorderproduct.hide();
      } else {
        addorderproduct.show();
      }
      errorSpanboxcaton.hide();
    } else {
      resultwrongpiece.show();
      resultremainpiece.show();
      // resultwrongpiece.text("You add the wrong Value");
      var checkIcon = $("<i>")
        .addClass("fa-solid fa-xmark fa-beat fa-lg")
        .css("color", "#ff2600");

      // Replace the text with the <i> element
      resultwrongpiece.html(checkIcon);
      resultremainpiece.html("No more than " + value5);
      resultsucesspiece.hide();
      addorderproduct.hide();

      errorSpanboxcaton.hide();
      errorSpanbox.hide();
      errorSpanpiece.hide();
    }
    // Check if input2 is empty and hide the spans if it is
    if (value6 === "") {
      resultwrongpiece.hide();
      resultsucesspiece.hide();
      resultremainpiece.hide();
      if (
        (!isNaN(numericValue4) && numericValue4 > value3) ||
        (!isNaN(numericValue2) && numericValue2 > value1)
      ) {
        addorderproduct.hide();
      } else if (value4 === "" || value2 === "") {
        addorderproduct.show();
      } else {
        addorderproduct.hide();
      }
    }
  }

  function comparephonenumber() {
    var phoneNumberValue = phonenumber.val();
    var ajaxUrl = $("#phonenumber").data("ajax-url");
    console.log(phoneNumberValue);

    $.ajax({
      method: "POST",
      url: ajaxUrl,
      data: {
        phoneNumberValue: phoneNumberValue,
      },
      success: function (response) {
        console.log(response);
        var phoneNumberArray = response.phoneNumberValue;

        var matchFound = false;

        for (var i = 0; i < phoneNumberArray.length; i++) {
          if (phoneNumberValue == phoneNumberArray[i].phonenumber) {
            matchFound = true;
            break;
          }
        }

        if (matchFound) {
          console.log("Number already exists");
          saveshopkeeper.hide();
          wrongnumber.show();
          wrongnumber.text("Number already exists");
          correntnumber.hide();
        } else {
          console.log("Number does not exist");
          saveshopkeeper.show();
          wrongnumber.hide();
          correntnumber.show();
          correntnumber.text("Number does not exist");
        }
      },
      error: function (errorThrown) {
        console.error(errorThrown);
      },
    });
  }

  $(".edit-button").on("click", function () {
    var productId = $(this).data("productid");
    var todayCaton = $(this).data("todaycaton");
    var todayStock = $(this).data("todaystock");
    var todayStockPiece = $(this).data("todaystockpiece");

    console.log("productId: ", productId);
    console.log("todayCaton: ", todayCaton);
    console.log("todayStock: ", todayStock);
    console.log("todayStockPiece: ", todayStockPiece);

    // Set the values directly to the input fields
    $("#todaycatonedit").val(todayCaton);
    $("#todaystockedit").val(todayStock);
    $("#todaystockpieceedit").val(todayStockPiece);

    // Set the product id in the select2 dropdown
    $("#productidedit").val(productId).trigger("change.select2");

    // Open the modal
    $("#modal-edit-todaystock").modal("show");
  });

  // Initialize Select2 outside of the click event
  $("#productid").select2({
    theme: "bootstrap4", // You can change the theme based on your project
  });
});
