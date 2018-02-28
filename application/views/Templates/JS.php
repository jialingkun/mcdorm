<!-- Core  -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/animsition/jquery.animsition.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/asscroll/jquery-asScroll.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/asscrollable/jquery.asScrollable.all.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

<!-- Plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/switchery/switchery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/intro-js/intro.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/screenfull/screenfull.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-fixedheader/dataTables.fixedHeader.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/datatables-tabletools/dataTables.tableTools.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/chartist-js/chartist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/gmaps/gmaps.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/matchheight/jquery.matchHeight-min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/jquery-ui/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-tmpl/tmpl.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-canvas-to-blob/canvas-to-blob.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-load-image/load-image.all.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-process.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-image.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-audio.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-video.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-validate.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/blueimp-file-upload/jquery.fileupload-ui.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/icheck/icheck.min.js"></script>


<script src="<?php echo base_url(); ?>assets/vendor/bootstrap-select/bootstrap-select.js"></script>

<!-- Scripts -->
<script src="<?php echo base_url(); ?>assets/js/core.js"></script>
<script src="<?php echo base_url(); ?>assets/js/site.js"></script>

<script src="<?php echo base_url(); ?>assets/js/sections/menu.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sections/menubar.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sections/sidebar.js"></script>

<script src="<?php echo base_url(); ?>assets/js/configs/config-colors.js"></script>
<script src="<?php echo base_url(); ?>assets/js/configs/config-tour.js"></script>

<script src="<?php echo base_url(); ?>assets/js/components/asscrollable.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/animsition.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/slidepanel.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/switchery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/gmaps.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/matchheight.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/datatables.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/jquery-placeholder.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/icheck.js"></script>
<script src="<?php echo base_url(); ?>assets/js/components/bootstrap-select.js"></script>

<script>
  function myFunction() {
    location.reload();
  }
</script>

<script>
  (function(document, window, $) {
    'use strict';

    var Site = window.Site;
    $(document).ready(function() {
      Site.run();
    });
  })(document, window, jQuery);
</script>

<script>
  (function(document, window, $) {
    'use strict';

    var Site = window.Site;

    $(document).ready(function($) {
      Site.run();
    });

      // Fixed Header Example
      // --------------------
      (function() {
        // initialize datatable
        var table = $('#exampleFixedHeader').DataTable({
          responsive: true,
          "bPaginate": false,
          "sDom": "t" // just show table, no other controls
        });

        // initialize FixedHeader
        var offsetTop = 0;
        if ($('.site-navbar').length > 0) {
          offsetTop = $('.site-navbar').eq(0).innerHeight();
        }
        var fixedHeader = new FixedHeader(table, {
          offsetTop: offsetTop
        });

        // redraw fixedHeaders as necessary
        $(window).resize(function() {
          fixedHeader._fnUpdateClones(true);
          fixedHeader._fnUpdatePositions();
        });
      })();

      // Individual column searching
      // ---------------------------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            initComplete: function() {
              this.api().columns().every(function() {
                var column = this;
                var select = $(
                  '<select class="form-control width-full"><option value=""></option></select>'
                  )
                .appendTo($(column.footer()).empty())
                .on('change', function() {
                  var val = $.fn.dataTable.util.escapeRegex(
                    $(this).val()
                    );

                  column
                  .search(val ? '^' + val + '$' : '',
                    true, false)
                  .draw();
                });

                column.data().unique().sort().each(function(
                  d, j) {
                  select.append('<option value="' + d +
                    '">' + d + '</option>')
                });
              });
            }
          });

          $('#exampleTableSearch').DataTable(options);
        });
      })();

      // Table Tools
      // -----------
      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var options = $.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [
            [5, 10, 25, 50, -1],
            [5, 10, 25, 50, "All"]
            ],
            "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
            "oTableTools": {
              "sSwfPath": "<?php echo base_url(); ?>assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
            }
          });

          $('#exampleTableTools').dataTable(options);
        });
      })();

      // Table Add Row
      // -------------

      (function() {
        $(document).ready(function() {
          var defaults = $.components.getDefaults("dataTable");

          var t = $('#exampleTableAdd').DataTable(defaults);

          $('#exampleTableAddBtn').on('click', function() {
            t.row.add([
              'Adam Doe',
              'New Row',
              'New Row',
              '30',
              '2015/10/15',
              '$20000'
              ]).draw();
          });
        });
      })();
    })(document, window, jQuery);
  </script>


  <script>
    $(document).ready(function($) {

      Site.run();

      // widget-linearea
      (function() {
        var linearea = new Chartist.Line('#widgetLinearea .ct-chart', {
          labels: ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'],
          series: [
          [0, 2.5, 2, 2.8, 2.6, 3.8, 0],
          [0, 1.4, 0.5, 2, 1.2, 0.9, 0]
          ]
        }, {
          low: 0,
          showArea: true,
          showPoint: false,
          showLine: false,
          fullWidth: true,
          chartPadding: {
            top: 0,
            right: 10,
            bottom: 0,
            left: 0
          },
          axisX: {
            showGrid: false,
            labelOffset: {
              x: -14,
              y: 0
            },
          },
          axisY: {
            labelOffset: {
              x: -10,
              y: 0
            },
            labelInterpolationFnc: function(num) {
              return num % 1 === 0 ? num : false;
            }
          }
        });
      })();

      //widget-pie-progress
      (function() {
        $("#widgetPieProgress .pieProgress-one").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("primary", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-two").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("cyan", 600),
          trackcolor: $.colors("blue-grey", 100),
        });

        $("#widgetPieProgress .pieProgress-three").asPieProgress({
          namespace: 'pie-progress',
          barcolor: $.colors("purple", 600),
          trackcolor: $.colors("blue-grey", 100),
        });
      })();

      // widget bar
      (function() {
        var bar = new Chartist.Bar('#widgetBar .ct-chart', {
          labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'],
          series: [
          [160, 200, 150, 400, 460, 440, 240, 250, 50],
          [600 - 160, 600 - 200, 600 - 150, 600 - 400, 600 -
          460, 600 - 440, 600 - 240, 600 - 250, 600 - 50
          ]
          ]
        }, {
          stackBars: true,
          fullWidth: true,
          seriesBarDistance: 0,
          axisX: {
            showGrid: false,
          },
          axisY: {
            showGrid: false,
            labelInterpolationFnc: function(num) {
              return num / 200 % 1 === 0 ? num : false;
            }
          }
        });
      })();

      // widget gmap
      (function() {
        var map = new GMaps({
          el: '#gmap',
          lat: -12.043333,
          lng: -77.028333,
          zoomControl: true,
          zoomControlOpt: {
            style: "SMALL",
            position: "TOP_LEFT"
          },
          panControl: true,
          streetViewControl: false,
          mapTypeControl: false,
          overviewMapControl: false
        });

        map.addStyle({
          styledMapName: "Styled Map",
          styles: $.components.get('gmaps', 'styles'),
          mapTypeId: "map_style"
        });

        map.setStyle("map_style");
      })();
    });
  </script>

  <script>
    (function(document, window, $) {
      $(document).ready(function($) {
        Site.run();
      });

      // Example File Upload
      // -------------------
      $('#exampleUploadForm').fileupload({
        url: '../../server/fileupload/',
        dropzone: $('#exampleUploadForm'),
        filesContainer: $('.file-list'),
        uploadTemplateId: false,
        downloadTemplateId: false,
        uploadTemplate: tmpl(
          '{% for (var i=0, file; file=o.files[i]; i++) { %}' +
          '<div class="file template-upload fade col-lg-2 col-md-4 col-sm-6 {%=file.type.search("image") !== -1? "image" : "other-file"%}">' +
          '<div class="file-item">' +
          '<div class="preview vertical-align">' +
          '<div class="file-action-wrap">' +
          '<div class="file-action">' +
          '{% if (!i && !o.options.autoUpload) { %}' +
          '<i class="icon wb-upload start" data-toggle="tooltip" data-original-title="Upload file" aria-hidden="true"></i>' +
          '{% } %}' +
          '{% if (!i) { %}' +
          '<i class="icon wb-close cancel" data-toggle="tooltip" data-original-title="Stop upload file" aria-hidden="true"></i>' +
          '{% } %}' +
          '</div>' +
          '</div>' +
          '</div>' +
          '<div class="info-wrap">' +
          '<div class="title">{%=file.name%}</div>' +
          '</div>' +
          '<div class="progress progress-striped active" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" role="progressbar">' +
          '<div class="progress-bar progress-bar-success" style="width:0%;"></div>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '{% } %}'
          ),
        downloadTemplate: tmpl(
          '{% for (var i=0, file; file=o.files[i]; i++) { %}' +
          '<div class="file template-download fade col-lg-2 col-md-4 col-sm-6 {%=file.type.search("image") !== -1? "image" : "other-file"%}">' +
          '<div class="file-item">' +
          '<div class="preview vertical-align">' +
          '<div class="file-action-wrap">' +
          '<div class="file-action">' +
          '<i class="icon wb-trash delete" data-toggle="tooltip" data-original-title="Delete files" aria-hidden="true"></i>' +
          '</div>' +
          '</div>' +
          '<img src="{%=file.url%}"/>' +
          '</div>' +
          '<div class="info-wrap">' +
          '<div class="title">{%=file.name%}</div>' +
          '</div>' +
          '</div>' +
          '</div>' +
          '{% } %}'
          ),
        forceResize: true,
        previewCanvas: false,
        previewMaxWidth: false,
        previewMaxHeight: false,
        previewThumbnail: false
      }).on('fileuploadprocessalways', function(e, data) {
        var length = data.files.length;

        for (var i = 0; i < length; i++) {
          if (!data.files[i].type.match(
            /^image\/(gif|jpeg|png|svg\+xml)$/)) {
            data.files[i].filetype = 'other-file';
        } else {
          data.files[i].filetype = 'image';
        }
      }
    }).on('fileuploadadded', function(e) {
      var $this = $(e.target);

      if ($this.find('.file').length > 0) {
        $this.addClass('has-file');
      } else {
        $this.removeClass('has-file');
      }
    }).on('fileuploadfinished', function(e) {
      var $this = $(e.target);

      if ($this.find('.file').length > 0) {
        $this.addClass('has-file');
      } else {
        $this.removeClass('has-file');
      }
    }).on('fileuploaddestroyed', function(e) {
      var $this = $(e.target);

      if ($this.find('.file').length > 0) {
        $this.addClass('has-file');
      } else {
        $this.removeClass('has-file');
      }
    }).on('click', function(e) {
      if ($(e.target).parents('.file').length === 0) $('#inputUpload')
        .trigger('click');
    });

    $(document).bind('dragover', function(e) {
      var dropZone = $('#exampleUploadForm'),
      timeout = window.dropZoneTimeout;
      if (!timeout) {
        dropZone.addClass('in');
      } else {
        clearTimeout(timeout);
      }
      var found = false,
      node = e.target;
      do {
        if (node === dropZone[0]) {
          found = true;
          break;
        }
        node = node.parentNode;
      } while (node !== null);
      if (found) {
        dropZone.addClass('hover');
      } else {
        dropZone.removeClass('hover');
      }
      window.dropZoneTimeout = setTimeout(function() {
        window.dropZoneTimeout = null;
        dropZone.removeClass('in hover');
      }, 100);
    });

    $('#inputUpload').on('click', function(e) {
      e.stopPropagation();
    });

    $('#uploadlink').on('click', function(e) {
      e.stopPropagation();
    });
  })(document, window, jQuery);

</script>




