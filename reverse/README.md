# AIS3_Pre_exam_2016-Misc2
**Points : 2**

## Description

[misc2](./misc2)

## Write-up

先用file觀察是什麼檔案格式，結果只是`data`
![](./image/file.PNG)
在用hexdump觀察看看 `hexdump -C misc2 | less`
![](./image/hexdump.PNG)
發現開頭是 `7Z`，懷疑是7z壓縮檔，但無法用7z解壓縮，上網查[7z magic number](https://en.wikipedia.org/wiki/7z)，開頭應該是 `7z`不是`7Z`，用hexedit修改後(37 7a)順利開啟，發現需要密碼，猜測密碼是大小為0的檔案名稱`UDJRRDVRJyfbWBxEMLEX`
![](./image/needPas.PNG)
得到下一個檔案，發現也是magic number錯誤，修改完後可順利開啟，需要密碼，猜與前 一個壓縮檔同密碼`UDJRRDVRJyfbWBxEMLEX`，得到下一個檔案，也是跟前面一樣magic number問題，不過這次解壓縮後多了一個`secret.txt`，裡面放的是下一個壓縮檔的密碼，多試幾次後發現接下來動作都一樣，1. 7Z 改成 7z，2.用secret.txt內的密碼解壓縮。

寫一個[script](uncompress.py)，自動執行上述步驟
最後得到`flag.txt`

FLAG : `7zs3{7zzZzzzZzzZzZzzZiP}` (還是Incorrect QAQ) --> 改成`ais3{7zzZzzzZzzZzZzzZiP}`過了 口A口