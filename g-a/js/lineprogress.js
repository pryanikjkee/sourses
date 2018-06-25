$(function () {
    let containerOne = $("#releated__works .image__block__glass");
    let imageOne = $("#releated__works .test__js .block__fixed__size");
    let arrowOne = $("#releated__works .image__block__glass .line__arrow");
    let arrowTextOne = $("#releated__works .image__block__glass .view__more");
    let descOne = $("#releated__works .image__block__glass .description__background");
    let descOneText = $("#releated__works .image__block__glass .description__background h2");
    let containerOneRel = $("#releated__works .image__block__finn");
    let imageOneRel = $("#releated__works .image__block__finn .block__fixed__size");
    let arrowOneRel = $("#releated__works .image__block__finn .line__arrow");
    let arrowTextOneRel = $("#releated__works .image__block__finn .view__more");
    let descOneRel = $("#releated__works .image__block__finn .description__background");
    let descOneTextRel = $("#releated__works .image__block__finn .description__background h2");
    // 
    let containerTwo = $(".row-item-2 .image__block__glass");
    let imageTwo = $(".row-item-2 .image__block__glass .block__fixed__size");
    let arrowTwo = $(".row-item-2 .image__block__glass .line__arrow");
    let arrowTextTwo = $(".row-item-2 .image__block__glass .view__more");
    let descTwo = $(".row-item-2 .image__block__glass .description__background");
    let descTwoText = $(".row-item-2 .image__block__glass h2");
    // 
    let containerThird = $(".row-item-2 .image__block__finn");
    let imageThird = $(".row-item-2 .image__block__finn .block__fixed__size");
    let arrowThird = $(".row-item-2 .image__block__finn .line__arrow");
    let arrowTextThird = $(".row-item-2 .image__block__finn .view__more");
    let descThird = $(".row-item-2 .image__block__finn .description__background");
    let descThirdText = $(".row-item-2 .image__block__finn h2");
    // 
    let containerFour = $(".row-item-2 .image__block__bigme");
    let imageFour = $(".row-item-2 .image__block__bigme .block__fixed__size");
    let arrowFour =$(".row-item-2 .image__block__bigme .line__arrow");
    let arrowTextFour =$(".row-item-2 .image__block__bigme .view__more");
    let descFour =$(".row-item-2 .image__block__bigme .description__background");
    let descFourText =$(".row-item-2 .image__block__bigme h2");
    //  anim_row_second
    let containerOneRow =  $(".row-item-2 .image__block__facegym");
    let imageOneRow = $(".row-item-2 .image__block__facegym .block__fixed__size");
    let arrowOneRow = $(".row-item-2 .image__block__facegym .line__arrow");
    let arrowTextOneRow =$(".row-item-2 .image__block__facegym .view__more");
    let descOneRow = $(".row-item-2 .image__block__facegym .description__background");
    let descOneTextRow = $(".row-item-2 .image__block__facegym h2");
    // row ite m 1
    let containerTwoRow = $(".row-item-1 .image__block__facegym");
    let imageTwoRow = $(".row-item-1 .image__block__facegym .block__fixed__size");
    let arrowTwoRow = $(".row-item-1 .image__block__facegym .line__arrow");
    let arrowTextTwoRow = $(".row-item-1 .image__block__facegym .view__more");
    let descTwoRow = $(".row-item-1 .image__block__facegym .description__background");
    let descTwoTextRow = $(".row-item-1 .image__block__facegym h2");
    // 
    let containerThirdRow = $(".row-item-1 .image__block__bigme");
    let imageThirdRow = $(".row-item-1 .image__block__bigme .block__fixed__size");
    let arrowThirdRow = $(".row-item-1 .image__block__bigme .line__arrow");
    let arrowTextThirdRow = $(".row-item-1 .image__block__bigme .view__more");
    let descThirdRow = $(".row-item-1 .image__block__bigme .description__background");
    let descThirdTextRow = $(".row-item-1 .image__block__bigme h2");
    // 
    let containerFourRow = $(".row-item-1 .image__block__finn");
    let imageFourRow = $(".row-item-1 .image__block__finn .block__fixed__size");
    let arrowFourRow = $(".row-item-1 .image__block__finn .line__arrow");
    let arrowTextFourRow = $(".row-item-1 .image__block__finn .view__more");
    let descFourRow = $(".row-item-1 .image__block__finn .description__background");
    let descFourTextRow = $(".row-item-1 .image__block__finn h2");
    // 
    const blockImage = $(".row-item-1 .image__block__glass");
    const imageHome = $(".row-item-1 .image__block__glass .block__fixed__size");
    const arrowHome = $(".row-item-1 .image__block__glass .line__arrow");
    const arrow__textHome = $(".row-item-1 .image__block__glass .view__more");
    const desc__blockHome = $(".row-item-1 .image__block__glass .description__background");
    const desc__block__textHome = $(".row-item-1 .image__block__glass h2");

    function WorkPageAnim(container, image, arrow, arrowText, desc, descText) {
        container.hover(function () {


            $(image).css({
                transform: "translate(-10px,0px)scale(0.99) ",

                transition: "160ms linear all"

            });
            $(arrowText).css({
                transform: "translate(-10px,0px) ",

                transition: "160ms linear all"

            });

            $(arrow).css({
                width: "55px",

                transition: "160ms linear all"

            });
            $(desc).css({
                transform: "translate(-15px,0px)scale(0.99)",

                transition: "160ms linear all"
            })
            $(descText).css({
                transform: "translate(-15px,2px)",

                transition: "160ms linear all"
            })
        }, function () {
            $(arrowText).css({
                transform: "translate(0px,0px) ",

                transition: "160ms linear all"

            });
            $(arrow).css({
                width: "50px",

                transition: "160ms linear all"

            });
            $(image).css({
                transform: "translate(0px,0px)",
                transition: "180ms linear all"
            });
            $(desc).css({
                transform: "translate(0px,0px)",

                transition: "180ms linear all"
            });
            $(descText).css({
                transform: "translate(0px,0px)",

                transition: "180ms linear all"
            });


        });

    }
    WorkPageAnim(blockImage, imageHome, arrowHome, arrow__textHome, desc__blockHome, desc__block__textHome);
    WorkPageAnim(containerOne, imageOne, arrowOne, arrowTextOne, descOne, descOneText);
    WorkPageAnim(containerOneRel, imageOneRel, arrowOneRel, arrowTextOneRel, descOneRel, descOneTextRel);
    WorkPageAnim(containerTwo, imageTwo, arrowTwo, arrowTextTwo, descTwo, descTwoText);
    WorkPageAnim(containerFour, imageFour, arrowFour, arrowTextFour, descFour, descFourText);
    WorkPageAnim(containerThird, imageThird, arrowThird, arrowTextThird, descThird, descThirdText);
    WorkPageAnim(containerOneRow, imageOneRow, arrowOneRow, arrowTextOneRow, descOneRow, descOneTextRow);
    WorkPageAnim(containerTwoRow, imageTwoRow, arrowTwoRow, arrowTextTwoRow, descTwoRow, descTwoTextRow);
    WorkPageAnim(containerFourRow, imageFourRow, arrowFourRow, arrowTextFourRow, descFourRow, descFourTextRow);
    WorkPageAnim(containerThirdRow, imageThirdRow, arrowThirdRow, arrowTextThirdRow, descThirdRow, descThirdTextRow);




})




function WorkPageLine() {
    $(function () {
        const parentOne = $(".article__works__block");
        const stickOne = $(".works__vertical__line");
        parentNum = stickOne.offset();
        $(window).on("scroll resize", function () {


            if ($(window).scrollTop() >= 50) {
                stickOne.css({
                    "height": ($(window).scrollTop() / 30) + "rem"
                })
            } else {
                stickOne.css({
                    "height": 0 + "rem"
                })
            }
        });

    })
}
$(function () {

    function func() {
        $('.loaderArea').remove();
    }
    setTimeout(func, 1500);
});



$(function () {
    const logo = $(".g__a__logo__black");
    const logoWhite = $(".g__a__logo");
    logo.hover(function () {
        logo.addClass("brand__block__black");

    }, function () {

        logo.removeClass("brand__block__black");
    });

    logoWhite.hover(function () {
        logoWhite.addClass("brand__block");
    }, function () {
        logoWhite.removeClass("brand__block");
    });

})


