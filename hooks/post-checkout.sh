#!/bin/bash
changed_files="$(git diff-tree -r --name-only --no-commit-id $1 $2)"
check_run() {
	echo "$changed_files" | grep --quiet "$1" && eval "$2"
}
cd sources
#check_run package.json "npm prune && npm install"