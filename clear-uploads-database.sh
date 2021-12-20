#!/bin/sh

\find ./html/uploads -type f | \grep -v -E './html/uploads/.gitkeep' | \xargs \rm -rf

\find ./mysql/database -type d | \grep -v -E './mysql/database$' | \xargs \rm -rf
\find ./mysql/database -type f | \grep -v -E './mysql/database/.gitkeep' | \xargs \rm -rf
