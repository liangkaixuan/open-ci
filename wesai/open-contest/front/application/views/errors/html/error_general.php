<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ERROR</title>
<style type="text/css">
*{margin:0;padding: 0}
html{font-size:10px}
body{background: #fff;color:#333}
#container{padding:100px 10px;margin: 0 auto;text-align: center;}
#container h1{padding:20px 0;font-size:2.0rem}
#container p{color:#999;}
#container .return{margin:40px auto}
#container .return a{color:#fff;cursor: pointer;background-color: #d12f38;height:30px;line-height:30px;
    border-color: #1ab394;padding:10px 20px;border-radius:4px;text-align: center;text-decoration:none;}
</style>
</head>
<body>
	<div id="container">
	    <div><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAxCAYAAACoJ+s+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkU0ODMzMDdEMzc5MDExRTZCRkFGQTBDNUVBMDhFQjY3IiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkU0ODMzMDdFMzc5MDExRTZCRkFGQTBDNUVBMDhFQjY3Ij4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RTQ4MzMwN0IzNzkwMTFFNkJGQUZBMEM1RUEwOEVCNjciIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RTQ4MzMwN0MzNzkwMTFFNkJGQUZBMEM1RUEwOEVCNjciLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5RXJqGAAAFRElEQVR42sxZa2wVRRTeu1UpKmpteGhpJaBBK77wQYKoCUosJfBDpaD1AWoMiDQSo4iCaFSipiBGq1EwKKhBCYKohB88rI8YARVFhao1LeofFYHWpleord8J3+jJyW7v3nv33nKSL52Z3Tvz7ZmZ82qidMk+LwfSH7gaqADOAU4HRgJf2hf33H5StxMdFTOxC4B7gCrgaDW+NohcFImLoKhhETA15PmzmU4cB8FzgXXAaSHPfwc+yHRyP0tylwIfGXJdwKeq/xXQ2RMEhwHrgRPU2DfAxcDTauzXbDSQKcE+wDuG3Ksk9zlvbSySKcGngMGq/yQwBUiy31c9Oz7fBM8G7lD9F4D7zTv6zJ2Vb4L3qt99AtQEvPOHapcDpfkiKNt1PdvtwC1AR8B7u03/5nwRHAscw/ZioDHkvS9MfxaNuZNqoDAugieq9kilvdpufrOHt9lJMfAckABOAZYB3wKXZ0MwwcO/SY2N4t83gT9TzL3E9KtpJ3fST4sV2FK2dP88IBFKIiSaKeBX3sT+a/yYG9gfD7yXgqAchQZgUIRdWg7cisjmnygEhcgKRcYLMCFioNsiLDwuwoc4eUMUApKdqbZ4gSF30Dz/PiI5kfdp1IPkZ2Cj6suaj6c6gxOA2ar/LvCyeefHNG++nOOXAsZ/oYY36HdxHseHESwyB3s7MBG4yky8N02CEt1MAx4C3BnroGYPco2d+nKBZFEQwYeBfmy38od/A0PMgvszsLdC8lF6lRuBMxllS8j/F9dqV+nCfEuwBJiuJnwQaFKTa2nPwrXK+X3dGniQbKCCnNwJLZZogjNUDtHIAMDJOrPIRi83spgXxyOXGkfQp091Umv8azUToTqg0hju2ARalPO4UPtvaLFAcpLzgVM5mKQ9slu6yMuPvMLLI0Z+gLhW0d5os30tXg8JtHgAfz5UQ6N95V9Ftng9LzrhutA3ofuOI4DgVtUe6puUsekIIKg9VZlvMjMbQp1HG5kzwU0da4Y0h0I/wOJrEQv/fA75VTBy0tJhfbEeONa8PJwBxMwckCulWSmGFvU9OFm1k77J/MsCJnFW/roYyfVlVaI/+wPUM32kfhOCP5hyhpZCpemVTM7j0Fy9WauXao9Q7QbfJDeXBVSmbBpQm0VV7ApgW0Ayv9cUpP4ze0JwsxqoNItvDVhE/PLHrDBElUJG6pvVtjqRcOs73ug+xrNt8qnuFnU2KtULy0IWHMHcd4HJd4NEIuSvgTkhKcYKuDh3UatULUdi0nqfQelbprSha3u13WRtc2hYZwQ8L6emJVw7o5v8eT61J1zuVs9WgnjSfdEzJvcdp/r3AY+ocN1KW0ga0JYiPfhMEneQcOd8qrk4dTbtXA1cw3azd7g636p+IKH/bcAl1F4zE57VquwWJGJLJ4njp50Vja9ixtcpVX5orx/zEpdyrMJ4lSU4hOUId+Vl2ycHeJe4xeeHjlHx5zAQ/MkmTRLqz1V9+YLHckwuwa0co/MhRy4oL15ocpAHgCc4UdxSQA81TY2t4Vho4t7FtHCbGpvNM1MUI7liFgVqjM2dAu11pSp9tNIWaiN9LW3ZxBi2VEocu1hrdCLerALkWqKW36SEeyXwthobyIuznbeyVxrEejM73MG8WBfZ19Lc7Eun/Ka/+C7vcBW/t3l2gLevnre/iR4pweMwkBnjKO7Iceb3STqFOrut6RB0MohubXIMF6aLZ1ocQHOq/3ZGrVE38eyUM8LOpD4jmniRc0yioU8p6YZNu+l3Z3Hr5JxeRF9b4v1fYD9EAo20CPXEoXS/6l8BBgDWDEPEwCZv9gAAAABJRU5ErkJggg=="></div>
		<!-- <h1>页面找不到了/(ㄒoㄒ)/~~~</h1> -->
		<h1><?php echo $heading; ?></h1>
		<?php echo $message; ?>
		<div class="return">
			<a href="/">返回网站首页>></a>
			<a href="javascript:void(0)" onclick="return history.go(-1)">返回上一页>></a>
		</div>
	</div>
</body>
</html>