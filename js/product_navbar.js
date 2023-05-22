const pagesContainer = document.querySelectorAll('.pages')

const generateNavigation = (pages, currentPage) => {
	if (pages < 1) return [];
	let visiblePages = [currentPage];
	while (visiblePages.length < pages && visiblePages.length < 3) {
		const firstElement = visiblePages[0];
		const lastElement = visiblePages[visiblePages.length - 1];
		if (firstElement > 1) {
			visiblePages.unshift(firstElement - 1);
		}
		if (lastElement < pages) {
			visiblePages.push(lastElement + 1);
		}
	}
  if(visiblePages[0]-1 === 1){
    visiblePages.unshift(1)
  }else if (visiblePages[0]-1>1){
    visiblePages = [1, '...'].concat(visiblePages)
  }
  if(visiblePages[visiblePages.length-1]+1 === pages){
    visiblePages.push(pages)
  }else if (visiblePages[visiblePages.length-1]+1<pages){
    visiblePages = visiblePages.concat('...', pages)
  }
	return visiblePages;
};

const guwno = generateNavigation(51, 49);