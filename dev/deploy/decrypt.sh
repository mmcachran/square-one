#!/bin/bash

ansible-vault decrypt .host/config/dev.cfg.vaulted --output=.host/config/dev.cfg --vault-password-file=.vaultpass
ansible-vault decrypt .host/config/staging.cfg.vaulted --output=.host/config/staging.cfg --vault-password-file=.vaultpass
ansible-vault decrypt .host/config/production.cfg.vaulted --output=.host/config/production.cfg --vault-password-file=.vaultpass
ansible-vault decrypt .host/config/common.cfg.vaulted --output=.host/config/common.cfg --vault-password-file=.vaultpass
ansible-vault decrypt .host/ansible_rsa.vaulted --output=.host/ansible_rsa --vault-password-file=.vaultpass
ansible-vault decrypt .host/ansible_rsa_password.vaulted --output=.host/ansible_rsa_password --vault-password-file=.vaultpass
