"use strict";
var KTProjectList = {
    init: function () {
        !(function () {
            var t = document.getElementById("kt_project_list_chart");
            if (t) {

                var e = t.getContext("2d");

                var OrderId = $('#OrderId').val();
                $.ajax({
                    type: "GET",
                    url: base_url+"/Ajax/Order-Progress",
                    data: {
                        'OrderId' : OrderId
                    },
                    dataType: "JSON",
                    success: function (response) {
                        var Progress = response.progress;
                        var ProgressCnt = response.ProgressCnt;
                        var BgColor = response.BgColor;
                        new Chart(e, {
                            type: "doughnut",
                            data: {
                                datasets: [
                                    {
                                        data: ProgressCnt,
                                        backgroundColor: BgColor
                                    },
                                ],
                                labels: Progress,
                            },
                            options: {
                                chart: { fontFamily: "inherit" },
                                cutout: "75%",
                                cutoutPercentage: 65,
                                responsive: !0,
                                maintainAspectRatio: !1,
                                title: { display: !1 },
                                animation: { animateScale: !0, animateRotate: !0 },
                                tooltips: {
                                    enabled: !0,
                                    intersect: !1,
                                    mode: "nearest",
                                    bodySpacing: 5,
                                    yPadding: 10,
                                    xPadding: 10,
                                    caretPadding: 0,
                                    displayColors: !1,
                                    backgroundColor: "#20D489",
                                    titleFontColor: "#ffffff",
                                    cornerRadius: 4,
                                    footerSpacing: 0,
                                    titleSpacing: 0,
                                },
                                plugins: { legend: { display: !1 } },
                            },
                        });
                    }
                });

             
               
            }
        })();
    },
};
KTUtil.onDOMContentLoaded(function () {
    KTProjectList.init();
});
