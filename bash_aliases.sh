# Docker aliases
alias dcup='docker-compose up -d'
alias dcdown='docker-compose down'
# ... | xargs ... <- pass the pipe value as a variable to the next call
alias dstop='docker ps -q | xargs docker stop'
alias drefresh='dstop && dcup'
alias dinit='sudo systemctl start docker && drefresh'
dcexec() {
    docker-compose exec "$1" "$2"
}

# Git aliases
alias adog='git log --all --decorate --oneline --graph'

# Utils
chownr() {
  sudo chown -R $USER:$USER "$1"
}
