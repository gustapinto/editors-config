# Docker aliases
alias dcup='docker-compose up -d'
alias dcdown='docker-compose down'
alias dstop='docker stop $(docker ps -q)'
alias dinit='sudo systemctl start docker && dcup'
dcexec() {
    docker-compose exec "$1" "$2"
}

# Git aliases
alias adog='git log --all --decorate --oneline --graph'

# Utils
chownr() {
  sudo chown -R $USER:$USER "$1"
}
